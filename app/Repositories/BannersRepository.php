<?php

namespace App\Repositories;

use DB;
use App\Models\Banners;
// use App\Repositories\BaseRepository;

/**
 * Class BannersRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:43 am UTC
*/

class BannersRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'link',
        'title',
        'alt'
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
        return Banners::class;
    }

    public function index () {

        $banners = Banners::select('id', 'title', 'link', 'alt')->paginate(10);
        if ($banners->total() == 0) {

            return [];
        }

        return $banners->toArray();
    }

    public function show ($id) {

        $banner = Banners::select('id', 'title', 'link', 'alt')
                            ->where('id', $id)
                            ->first();

        if (empty($banner)) {

            return [];
        }

        return $banner->toArray();
    }

    public function edit ($id) {

        $banner = Banners::where('id', $id)
                            ->first();

        if (empty($banner)) {

            return [];
        }

        return $banner->toArray();
    }

    public function store ($data = []) {

        try {

            DB::beginTransaction();

            $banner_id = Banners::select('id')->max('id');

            $banner = new Banners;            
            $banner->id = ($banner_id + 1);
            $banner->title = $data['title'];
            $banner->link  = $data['link'];
            $banner->alt   = $data['alt'];
            if ($banner->save()) {
                
                DB::commit();
                return [ 'error' => 0, 'message'  => 'Banner saved successfully.' ]; 
            }

            return [ 'error' => 1, 'message'  => 'Banner not saved.' ];

        } catch (Exception $ex) {

            DB::rollback();
            return [ 'error' => 1, 'message'  => $ex->getMessage() ];
        }
    }

    public function update ($id, $data = []) {

        $banner = Banners::where('id', $id)->first();
        if (!empty($banner)) {

            $banner->update($data);
            return [ 'error' => 0, 'message'  => 'Banner updated successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Banner not updated.' ];
    }

    public function destroy ($id) {

        $banner = Banners::where('id', $id)->first();
        if (!empty($banner)) {

            $banner->delete();
            return [ 'error' => 0, 'message'  => 'Banner deleted successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Banner not deleted.' ];
    }


}
