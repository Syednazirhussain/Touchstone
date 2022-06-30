<?php

namespace App\Repositories;

use DB;
use App\Models\File;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;

/**
 * Class FileRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:48 am UTC
*/

class FileRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'origin_name',
        'link_name',
        'folder',
        'title',
        'alt',
        'subject',
        'subject_id',
        'user_id',
        'type',
        'order',
        'is_video',
        'video_script'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return File::class;
    }

    public function index ($product_id, $subject = "App\\Models\\Product") {

        $files = File::where('subject_id', $product_id)
                    ->where('subject', $subject)
                    ->with([
                        'product' => function ($q) {

                            return $q->select('id', 'title');
                        },
                        'banner' => function ($q) {

                            return $q->select('id', 'title');
                        }
                    ])
                    ->paginate(10);

        return $files->toArray();
    }

    public function show ($product_id, $id, $subject = "App\\Models\\Product") {

        $file = File::where('id', $id)
                        ->where('subject_id', $product_id)
                        ->where('subject', $subject)
                        ->with([
                            'product' => function ($q) {

                                return $q->select('id', 'title');
                            },
                            'banner' => function ($q) {

                                return $q->select('id', 'title');
                            }
                        ])
                        ->first();

        if (empty($file)) {

            return [];
        }

        return $file->toArray();
    }

    public function store ($product_id, $data = []) {

        try {

            DB::beginTransaction();

            $storage_path = config('touchstone.STORAGE_LOCATION');
            
            $file_name = null;

            if ($data['file'] != 'null') {

                $fileObj = $data['file'];
                $path = Storage::disk('public')->putFile($storage_path, $fileObj);

                $pathArr = explode("/", $path);
                $file_name = $pathArr[count($pathArr) - 1];
            }

            $alt = [
                'en'    => $data['alt_en'],
                'pl'    => $data['alt_pl'],
                'ja'    => $data['alt_ja'],
                'es'    => $data['alt_es'],
                'th'    => $data['alt_th']
            ];

            $alt = json_encode($alt);

            $file_id = File::select('id')->max('id');

            $file = new File;            
            $file->id = ($file_id + 1);
            $file->subject_id   = $product_id;
            $file->subject      = "App\\Models\\Product";
            $file->link_name    = $file_name;
            $file->title        = $data['title'];
            $file->is_video     = json_encode($data['is_video']);
            $file->alt          = json_encode($alt);
            $file->order        = json_encode($data['order']);

            if ($file) {

                DB::commit();
                return [ 'error' => 0, 'message' => 'File created successfully with ID: '.$file->id ];
            }

            return [ 'error' => 1, 'message' => 'File not created' ];

        } catch (Exception $ex) {

            DB::rollback();
            return [ 'error' => 1, 'message'  => $ex->getMessage() ];
        }
    }


    public function edit ($product_id, $id, $subject = "App\\Models\\Product") {

        $file = File::where('id', $id)
                        ->where('subject', $subject)
                        ->where('subject_id', $product_id)
                        ->with([
                            'product' => function ($q) {

                                return $q->select('id', 'title');
                            },
                            'banner' => function ($q) {

                                return $q->select('id', 'title');
                            }
                        ])
                        ->first();

        if (empty($file)) {

            return [];
        }

        return $file->toArray();
    }

    public function update ($product_id, $id, $data = []) {

        try {

            DB::beginTransaction();

            $file = File::where('id', $id)
                            ->where('subject_id', $product_id)
                            ->first();

            if (!empty($file)) {

                $storage_path = config('touchstone.STORAGE_LOCATION');
                
                $file_name = $file->link_name;

                if (Storage::disk('public')->exists($storage_path."/".$file->link_name)) {
                    
                    Storage::delete($storage_path."/".$file->link_name);
                }

                if ($data['file'] != 'null') {

                    $fileObj = $data['file'];
                    $path = Storage::disk('public')->putFile($storage_path, $fileObj);

                    $pathArr = explode("/", $path);
                    $file_name = $pathArr[count($pathArr) - 1];
                }

                $alt = [
                    'en'    => $data['alt_en'],
                    'pl'    => $data['alt_pl'],
                    'ja'    => $data['alt_ja'],
                    'es'    => $data['alt_es'],
                    'th'    => $data['alt_th']
                ];

                $alt = json_encode($alt);

                $flag = $file->update([

                    'link_name' => $file_name,
                    'title'     => $data['title'],
                    'is_video'  => $data['is_video'],
                    'alt'       => $alt,
                    'order'     => $data['order']
                ]);

                if ($flag) {

                    DB::commit();
                    return [ 'error' => 0, 'message' => 'File updated successfully' ];
                }

            }

            return [ 'error' => 1, 'message' => 'File not updated' ];

        } catch (Exception $ex) {

            DB::rollback();
            return [ 'error' => 1, 'message' => $ex->getMessage() ];
        }
    }

    public function destroy ($product_id, $id) {

        $file = File::where('id', $id)
                    ->where('subject_id', $product_id)
                    ->delete();

        if ($file) {

            return [ 'error' => 0, 'message' => 'File deleted successfully' ];
        }

        return [ 'error' => 1, 'message' => 'File not deleted' ];
    }



}
