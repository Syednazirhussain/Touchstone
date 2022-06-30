<?php

namespace App\Repositories;

use DB;
use App\Models\Product;
use App\Models\SimilarProducts;
use App\Repositories\BaseRepository;

/**
 * Class SimilarProductsRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:58 am UTC
*/

class SimilarProductsRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'similar_product_id'
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
        return SimilarProducts::class;
    }

    public function index ($product_id) {

        $similarProducts = SimilarProducts::where('product_id', $product_id)
                                        ->with([
                                            'product' => function ($q) {

                                                return $q->select('id', 'title');
                                            },
                                            'similar_product' => function ($q) {

                                                return $q->select('id', 'title');
                                            }
                                        ])
                                        ->paginate(10);

        return $similarProducts->toArray();
    }

    public function create () {

        $products = Product::select('id', 'title')->get();
        return $products->toArray();
    }

    public function store ($product_id, $data = []) {

        try {

            DB::beginTransaction();

            $similarProduct_id = SimilarProducts::select('id')->max('id');
            $similarProduct = new SimilarProducts;            
            $similarProduct->id = ($similarProduct_id + 1);
            $similarProduct->product_id    = $product_id;
            $similarProduct->similar_product_id    = $data['similar_product_id'];
            
            if ($similarProduct->save()) {
                
                DB::commit();
                return [ 'error' => 0, 'message'  => 'Similar product saved successfully.' ]; 
            }

            return [ 'error' => 1, 'message'  => 'Similar product not saved.' ];

        } catch (Exception $ex) {

            DB::rollback();
            return [ 'error' => 1, 'message'  => $ex->getMessage() ];
        }
    }


   public function show ($product_id, $id) {

        $similarProduct = SimilarProducts::where('id', $id)
                                    ->where('product_id', $product_id)
                                    ->with([
                                        'product' => function ($q) {

                                            return $q->select('id', 'title');
                                        },
                                        'similar_product' => function ($q) {

                                            return $q->select('id', 'title');
                                        }
                                    ])
                                    ->first();

        if (empty($similarProduct)) {

            return [];
        }

        return $similarProduct->toArray();
    }

    public function edit ($product_id, $id) {

        $similarProduct = SimilarProducts::where('id', $id)
                                ->where('product_id', $product_id)
                                ->with([
                                    'similar_product' => function ($q) {

                                        return $q->select('id', 'title');
                                    }
                                ])
                                ->first();

        $products = Product::select('id', 'title')->get();

        if (empty($similarProduct)) {

            return [];
        }

        $payload = [
            'products'          => $products,
            'similarProduct'    => $similarProduct
        ];

        return $payload;
    }

    public function update ($product_id, $id, $data = []) {

        $id = $data["id"];
        $product_id = $data["product_id"];

        $similarProduct = SimilarProducts::where('id', $id)
                                ->where('product_id', $product_id)
                                ->update([
                                    'similar_product_id' => $data['similar_product_id']
                                ]);

        if ($similarProduct) {

            return [ 'error' => 0, 'message' => 'Similar product updated successfully' ];
        }

        return [ 'error' => 1, 'message' => 'Similar product not updated' ];
    }

    public function destroy ($product_id, $id) {

        $similarProduct = SimilarProducts::where('id', $id)
                                        ->where('product_id', $product_id)
                                        ->delete();

        if ($similarProduct) {

            return [ 'error' => 0, 'message' => 'Similar product deleted successfully' ];
        }

        return [ 'error' => 1, 'message' => 'Similar product not deleted' ];
    }


}
