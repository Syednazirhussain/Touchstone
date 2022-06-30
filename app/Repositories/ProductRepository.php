<?php

namespace App\Repositories;

use DB;
use App\Models\File;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductProductCategory;
// use App\Repositories\BaseRepository;

/**
 * Class ProductRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:53 am UTC
*/

// class ProductRepository extends BaseRepository
class ProductRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sku',
        'description',
        'price_retail',
        'price_wholesale',
        'price_retail_gbp',
        'price_wholesale_gbp',
        'price_discounted',
        'price_discounted_gbp',
        'cv',
        'cv_gbp',
        'is_moderate',
        'body',
        'category_id',
        'product_id',
        'supply',
        'url',
        'type',
        'meta_title',
        'meta_description',
        'main_file_id',
        'order',
        'title',
        'price_retail_eur',
        'price_retail_yen',
        'price_wholesale_eur',
        'price_wholesale_yen',
        'price_discounted_eur',
        'price_discounted_yen',
        'cv_eur',
        'cv_yen',
        'is_show_autoship',
        'is_popular',
        'bundles_savings',
        'bundles_savings_gbp',
        'is_contains_hemp',
        'is_show_in_vbo_catalog',
        'best_seller_rank',
        'opengraph_image_id',
        'only_available_vbo',
        'bottle_count'
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
        return Product::class;
    }


    public function index () {

        $products = Product::select([
                            'id',
                            'sku',
                            'title',
                            'url',
                            'order',
                            'supply',
                            'price_retail'
                        ])
                        ->paginate(10);

        return $products->toArray();
    }

    public function show ($id) {

        $product = Product::where('id', $id)->first();
        return $product->toArray();
    }

    public function edit ($id) {

        $product = Product::where('id', $id)
                            ->with([
                                'file',
                                'categories'
                            ])
                            ->first();

        $files = File::all();
        $productCategories = ProductCategory::all();

        if (empty($product)) {

            return [];
        }

        $data = [
            'files'                 => $files,  
            'product'               => $product->toArray(),
            'productCategories'     => $productCategories->toArray(),
        ];

        return $data;
    }


    public function update ($id, $data = []) {

        try {

            // dd($data);

            DB::beginTransaction();

            $electedProductCategory = $data['selectedProduct'];
            
            unset($data['file']);
            unset($data['categories']);
            unset($data['created_at']);
            unset($data['updated_at']);
            unset($data['deleted_at']);
            unset($data['selectedProduct']);

            $product = Product::where('id', $id)->update($data);
            if ($product) {

                if (count($electedProductCategory) > 0) {

                    ProductProductCategory::where('product_id', $id)->delete();

                    foreach ($electedProductCategory as $category_id) {

                        ProductProductCategory::create([ 
                                'product_id'  => $id,
                                'category_id' => $category_id 
                             ]);
                        
                        DB::commit();
                    }
                }

                return [ 'error' => 0, 'message'  => 'Product updated successfully.' ]; 
            }

            return [ 'error' => 1, 'message'  => 'Product not updated.' ];

        } catch (Exception $ex) {

            DB::rollback();
            return [ 'error' => 1, 'message'  => $ex->getMessage() ];
        }
    }



}
