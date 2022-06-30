<?php

namespace App\Repositories;

use DB;
use Exception;
use App\Models\BuyNow;
use App\Models\Product;
use App\Models\BuyNowProducts;
// use App\Repositories\BaseRepository;

/**
 * Class BuyNowRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:44 am UTC
*/

class BuyNowRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'country_id',
        'coupon_code',
        'currency',
        'ref',
        'is_auto_ship',
        'is_active',
        'name',
        'slug'
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
        return BuyNow::class;
    }

    public function index () {

        $buyNow = BuyNow::select('id', 'name', 'coupon_code', 'is_auto_ship', 'is_active')->paginate(10);
        if ($buyNow->total() == 0) {

            return [];
        }

        return $buyNow->toArray();
    }

    public function create () {

        $products = Product::select('id', 'description')->get()->toArray();
        return $products;
    }

    public function edit ($id) {

        $buyNow     = BuyNow::where('id', $id)
                        ->with([
                            'buy_now_products.product' => function ($q) {

                                return $q->select('id', 'meta_title');
                            }
                        ])
                        ->first();

        $products   = Product::select('id', 'description')->get()->toArray();

        $data = [
            'buyNow'    => $buyNow,
            'products'  => $products
        ];

        return $data;
    }

    public function store ($data = []) {

        try {

            DB::beginTransaction();

            $products = $data['products'];
            unset($data['products']);

            $buy_now_id = BuyNow::select('id')->max('id');

            $buyNow = new BuyNow;            
            $buyNow->id             = ($buy_now_id + 1);
            $buyNow->name           = $data['name'];
            $buyNow->slug           = (array_key_exists('slug', $data)) ? $data['slug'] : '';
            $buyNow->coupon_code    = $data['coupon_code'];
            $buyNow->is_active      = $data['is_active'];
            $buyNow->is_auto_ship   = $data['is_auto_ship'];

            if ($buyNow->save()) {

                foreach ($products as $product) {

                    $buy_now_product_id = BuyNowProducts::select('id')->max('id');

                    $buyNowProducts = new BuyNowProducts;
                    $buyNowProducts->id         = ($buy_now_product_id + 1);
                    $buyNowProducts->buy_now_id = ($buy_now_id + 1);
                    $buyNowProducts->product_id = $product['id'];
                    $buyNowProducts->quantity   = $product['quantity'];
                    $buyNowProducts->save();
                    
                    DB::commit();
                }
                
                DB::commit();
                return [ 'error' => 0, 'message'  => 'BuyNow saved successfully.' ]; 
            }

            return [ 'error' => 1, 'message'  => 'BuyNow not saved.' ];

        } catch (Exception $ex) {

            DB::rollback();
            return [ 'error' => 1, 'message'  => $ex->getMessage() ];
        }
    }

    public function update ($id, $data = []) {

        try {

            DB::beginTransaction();

            unset($data['created_at']);
            unset($data['updated_at']);
            unset($data['buy_now_products']);

            $products = $data['products'];
            unset($data['products']);

            $data['slug'] = '';

            $buyNow = BuyNow::where('id', $id)->first();
            if (!empty($buyNow)) {

                if ($buyNow->update($data)) {

                    $buy_now_id = $buyNow->id;

                    $buyNowProducts = BuyNowProducts::where('buy_now_id', $buy_now_id)->get();
                    if (!empty($buyNowProducts)) {

                        BuyNowProducts::where('buy_now_id', $buy_now_id)->delete();
                    }

                    foreach ($products as $product) {

                        $buy_now_product_id = BuyNowProducts::select('id')->max('id');

                        $buyNowProducts = new BuyNowProducts;
                        $buyNowProducts->id         = ($buy_now_product_id + 1);
                        $buyNowProducts->buy_now_id = $buy_now_id;
                        $buyNowProducts->product_id = $product['id'];
                        $buyNowProducts->quantity   = $product['quantity'];
                        $buyNowProducts->save();
                        
                        DB::commit();
                    }

                    return [ 'error' => 0, 'message'  => 'BuyNow updated successfully.' ]; 
                }
            }

            return [ 'error' => 1, 'message'  => 'BuyNow not updated.' ];

        } catch (Exception $ex) {

            DB::rollback();
            return [ 'error' => 1, 'message'  => $ex->getMessage() ];            
        }
    }

    public function destroy ($id) {

        try {

            DB::beginTransaction();

            $buyNowProducts = BuyNowProducts::where('buy_now_id', $id)->get();
            if (!empty($buyNowProducts)) {

                BuyNowProducts::where('buy_now_id', $id)->delete();
            }

            $buyNow = BuyNow::where('id', $id)->first();
            if (!empty($buyNow)) {

                $buyNow->delete();

                DB::commit();
                return [ 'error' => 0, 'message'  => 'BuyNow deleted successfully.' ]; 
            }

            return [ 'error' => 1, 'message'  => 'BuyNow not deleted.' ];

        } catch (Exception $ex) {

            DB::rollback();
            return [ 'error' => 1, 'message'  => $ex->getMessage() ];
        }
    }

}
