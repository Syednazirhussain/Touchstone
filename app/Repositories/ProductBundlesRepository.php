<?php

namespace App\Repositories;

use DB;
use App\Models\Product;
use App\Models\ProductBundles;
use App\Repositories\BaseRepository;

/**
 * Class ProductBundlesRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:54 am UTC
*/

class ProductBundlesRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'bundle_product_id',
        'order',
        'count_product',
        'title',
        'price_text'
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
        return ProductBundles::class;
    }

    public function index ($product_id) {

        $bundles = ProductBundles::where('product_id', $product_id)
                                ->with([
                                    'product' => function ($q) {

                                        return $q->select('id', 'title');
                                    },
                                    'bundle_product' => function ($q) {

                                        return $q->select('id', 'title');
                                    }
                                ])
                                ->paginate(10);

        return $bundles->toArray();
    }

   public function show ($product_id, $id) {

        $bundle = ProductBundles::where('id', $id)
                            ->where('product_id', $product_id)
                            ->with([
                                'product' => function ($q) {

                                    return $q->select('id', 'title');
                                },
                                'bundle_product' => function ($q) {

                                    return $q->select('id', 'title');
                                }
                            ])
                            ->first();

        if (empty($bundle)) {

            return [];
        }

        return $bundle->toArray();
    }

    public function store ($product_id, $data = []) {

        try {

            DB::beginTransaction();

            $bundle_id = ProductBundles::select('id')->max('id');

            $bundle = new ProductBundles;            
            $bundle->id = ($bundle_id + 1);
            $bundle->product_id     = $product_id;
            $bundle->bundle_product_id = $data['bundle_product_id'];
            $bundle->title          = json_encode($data['title']);
            $bundle->price_text     = json_encode($data['price_text']);
            $bundle->order          = $data['order'];
            $bundle->count_product  = $data['count_product'];
            
            if ($bundle->save()) {
                
                DB::commit();
                return [ 'error' => 0, 'message'  => 'Product bundle saved successfully.' ]; 
            }

            return [ 'error' => 1, 'message'  => 'Product bundle not saved.' ];

        } catch (Exception $ex) {

            DB::rollback();
            return [ 'error' => 1, 'message'  => $ex->getMessage() ];
        }
    }

    public function edit ($product_id, $id) {

        $bundle = ProductBundles::where('id', $id)
                                ->where('product_id', $product_id)
                                ->first();

        $products = Product::select('id', 'title')->get();

        if (empty($bundle)) {

            return [];
        }

        $payload = [
            'products'  => $products,
            'bundle'    => $bundle
        ];

        return $payload;
    }

    public function update ($product_id, $id, $data = []) {

        $id = $data["id"];
        $product_id = $data["product_id"];

        $bundle = ProductBundles::where('id', $id)
                                ->where('product_id', $product_id)
                                ->update([
                                    'title'         => json_encode($data['title']),
                                    'price_text'    => json_encode($data['price_text']),
                                    'order'         => $data['order'],
                                    'count_product' => $data['count_product'],
                                    'product_id'    => $data['product_id'],
                                    'bundle_product_id' => $data['bundle_product_id']
                                ]);

        if ($bundle) {

            return [ 'error' => 0, 'message' => 'Product bundle updated successfully' ];
        }

        return [ 'error' => 1, 'message' => 'Product bundle not updated' ];
    }

    public function destroy ($product_id, $id) {

        $bundle = ProductBundles::where('id', $id)
                                ->where('product_id', $product_id)
                                ->delete();

        if ($bundle) {

            return [ 'error' => 0, 'message' => 'Product bundle deleted successfully' ];
        }

        return [ 'error' => 1, 'message' => 'Product bundle not deleted' ];
    }


}
