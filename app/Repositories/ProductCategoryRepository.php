<?php

namespace App\Repositories;

use DB;
use App\Models\ProductCategory;
// use App\Repositories\BaseRepository;

/**
 * Class ProductCategoryRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:54 am UTC
*/

class ProductCategoryRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'order',
        'comment',
        'url',
        'meta_title',
        'meta_description',
        'is_show_on_menu',
        'is_show_mobile_menu',
        'opengraph_image_id'
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
        return ProductCategory::class;
    }

    public function index () {

        $productCategories = ProductCategory::select([
                                            'id', 
                                            'name', 
                                            'url', 
                                            'order'
                                        ])
                                        ->orderBy('id', 'DESC')
                                        ->paginate(10);

        return $productCategories->toArray();
    }

    public function show ($id) {

        $productCategory = ProductCategory::select([
                                            'id', 
                                            'name', 
                                            'url', 
                                            'order',
                                            'comment'
                                        ])
                                        ->where('id', $id)
                                        ->first();
        if (empty($productCategory)) {

            return [];
        }

        $productCategory = $productCategory->toArray();
        $productCategory['comment']     = json_decode($productCategory['comment'], 1);

        return $productCategory;
    }

    public function edit ($id) {

        $productCategory = ProductCategory::where('id', $id)->first();
        if (empty($productCategory)) {

            return [];
        }

        $productCategory = $productCategory->toArray();

        $productCategory['name']        = json_decode($productCategory['name'], 1);
        $productCategory['comment']     = json_decode($productCategory['comment'], 1);
        $productCategory['meta_title']  = json_decode($productCategory['meta_title'], 1);
        $productCategory['meta_description']  = json_decode($productCategory['meta_description'], 1);

        return $productCategory;
    }

    public function store ($data = []) {

        try {

            DB::beginTransaction();

            $productCategory_id = ProductCategory::select('id')->max('id');

            $productCategory = new ProductCategory;  
            $productCategory->id = ($productCategory_id + 1);
            $productCategory->url   = $data['url'];
            $productCategory->order   = $data['order'];
            $productCategory->name = json_encode($data['name']);
            $productCategory->comment = json_encode($data['comment']);
            $productCategory->is_show_on_menu   = $data['is_show_on_menu'];
            $productCategory->meta_title = json_encode($data['meta_title']);
            $productCategory->is_show_mobile_menu  = $data['is_show_mobile_menu'];
            $productCategory->meta_description = json_encode($data['meta_description']);

            if ($productCategory->save()) {
                
                DB::commit();
                return [ 'error' => 0, 'message'  => 'Product category saved successfully.' ]; 
            }

            return [ 'error' => 1, 'message'  => 'Product category not saved.' ];

        } catch (Exception $ex) {

            DB::rollback();
            return [ 'error' => 1, 'message'  => $ex->getMessage() ];
        }
    }

    public function update ($id, $data = []) {

        $name               = $data['name'];
        $comment            = $data['comment'];
        $meta_title         = $data['meta_title'];
        $meta_description   = $data['meta_description'];

        unset($data['name']);
        unset($data['comment']);
        unset($data['meta_title']);
        unset($data['meta_description']);

        $data['name']               = json_encode($name);
        $data['comment']            = json_encode($comment);
        $data['meta_title']         = json_encode($meta_title);
        $data['meta_description']   = json_encode($meta_description);

        $is_updated = ProductCategory::where('id', $id)->update($data);
        if ($is_updated) {

            return [ 'error' => 0, 'message'  => 'Product category updated successfully.' ];
        }

        return [ 'error' => 1, 'message'  => 'No changes are found.' ];
    }

    public function destroy ($id) {

        $productCategory = ProductCategory::where('id', $id)->first();
        if (!empty($productCategory)) {

            $productCategory->delete();
            return [ 'error' => 0, 'message'  => 'Product category deleted successfully.' ];
        }

        return [ 'error' => 1, 'message'  => 'Product category not deleted.' ];
    }


}
