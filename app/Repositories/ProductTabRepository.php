<?php

namespace App\Repositories;

use DB;
use App\Models\ProductTab;
use App\Repositories\BaseRepository;

/**
 * Class ProductTabRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:56 am UTC
*/

class ProductTabRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'title',
        'body',
        'order'
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
        return ProductTab::class;
    }

    public function index ($product_id) {

        $productTab = ProductTab::where('product_id', $product_id)
                            ->with([
                                'product' => function ($q) {

                                    return $q->select('id', 'title');
                                }
                            ])
                            ->paginate(10);

        return $productTab->toArray();
    }

    public function show ($product_id, $id) {

        $productTab = ProductTab::where('id', $id)
                        ->where('product_id', $product_id)
                        ->with([
                            'product' => function ($q) {

                                return $q->select('id', 'title');
                            }
                        ])
                        ->first();

        if (empty($productTab)) {

            return [];
        }

        return $productTab->toArray();
    }

    public function edit ($product_id, $id) {

        $productTab = ProductTab::where('id', $id)
                        ->where('product_id', $product_id)
                        ->with([
                            'product' => function ($q) {

                                return $q->select('id', 'title');
                            }
                        ])
                        ->first();

        if (empty($productTab)) {

            return [];
        }

        return $productTab->toArray();
    }

    public function store ($product_id, $data = []) {

        try {

            DB::beginTransaction();

            $productTab_id = ProductTab::select('id')->max('id');

            $productTab = new ProductTab;            
            $productTab->id = ($productTab_id + 1);
            $productTab->product_id  = $product_id;
            $productTab->order = $data['order'];
            $productTab->title = json_encode($data['title']);
            $productTab->body = json_encode($data['body']);
            
            if ($productTab->save()) {
                
                DB::commit();
                return [ 'error' => 0, 'message'  => 'Tab saved successfully.' ]; 
            }

            return [ 'error' => 1, 'message'  => 'Tab not saved.' ];

        } catch (Exception $ex) {

            DB::rollback();
            return [ 'error' => 1, 'message'  => $ex->getMessage() ];
        }
    }


    public function update ($id, $data = []) {

        $id = $data["id"];
        $product_id = $data["product_id"];

        unset($data["id"]);
        unset($data["product"]);
        unset($data["product_id"]);
        unset($data["created_at"]);
        unset($data["updated_at"]);

        $productTab = ProductTab::where('id', $id)
                        ->where('product_id', $product_id)
                        ->update($data);

        if ($productTab) {

            return [ 'error' => 0, 'message' => 'Tab updated successfully' ];
        }

        return [ 'error' => 1, 'message' => 'Tab not updated' ];
    }

    public function destroy ($product_id, $id) {

        $productTab = ProductTab::where('id', $id)
                        ->where('product_id', $product_id)
                        ->delete();

        if ($productTab) {

            return [ 'error' => 0, 'message' => 'Tab deleted successfully' ];
        }

        return [ 'error' => 1, 'message' => 'Tab not deleted' ];
    }

}
