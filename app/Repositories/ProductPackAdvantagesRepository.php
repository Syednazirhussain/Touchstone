<?php

namespace App\Repositories;

use DB;
use App\Models\ProductPackAdvantages;
use App\Repositories\BaseRepository;

/**
 * Class ProductPackAdvantagesRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:55 am UTC
*/

class ProductPackAdvantagesRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'text',
        'type',
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
        return ProductPackAdvantages::class;
    }

    public function index ($product_id) {

        $packages = ProductPackAdvantages::where('product_id', $product_id)
                                ->with([
                                    'product' => function ($q) {

                                        return $q->select('id', 'title');
                                    }
                                ])
                                ->paginate(10);

        return $packages->toArray();
    }

   public function show ($product_id, $id) {

        $package = ProductPackAdvantages::where('id', $id)
                            ->where('product_id', $product_id)
                            ->with([
                                'product' => function ($q) {

                                    return $q->select('id', 'title');
                                }
                            ])
                            ->first();

        if (empty($package)) {

            return [];
        }

        return $package->toArray();
    }

    public function edit ($product_id, $id) {

        $package = ProductPackAdvantages::where('id', $id)
                                ->where('product_id', $product_id)
                                ->first();

        if (empty($package)) {

            return [];
        }

        return $package->toArray();
    }

    public function update ($product_id, $id, $data = []) {

        $id = $data["id"];
        $product_id = $data["product_id"];

        $package = ProductPackAdvantages::where('id', $id)
                                ->where('product_id', $product_id)
                                ->update([
                                    'text'  => json_encode($data['text']),
                                    'type'  => $data['type'],
                                    'order' => $data['order']
                                ]);

        if ($package) {

            return [ 'error' => 0, 'message' => 'Package advantage updated successfully' ];
        }

        return [ 'error' => 1, 'message' => 'Package advantage not updated' ];
    }

    public function store ($product_id, $data = []) {

        try {

            DB::beginTransaction();

            $package_id = ProductPackAdvantages::select('id')->max('id');

            $package = new ProductPackAdvantages;            
            $package->id = ($package_id + 1);
            $package->product_id = $product_id;
            $package->text  = json_encode($data['text']);
            $package->order = $data['order'];
            $package->type  = $data['type'];
            
            if ($package->save()) {
                
                DB::commit();
                return [ 'error' => 0, 'message'  => 'Package advantage saved successfully.' ]; 
            }

            return [ 'error' => 1, 'message'  => 'Package advantage not saved.' ];

        } catch (Exception $ex) {

            DB::rollback();
            return [ 'error' => 1, 'message'  => $ex->getMessage() ];
        }
    }


    public function destroy ($product_id, $id) {

        $package = ProductPackAdvantages::where('id', $id)
                                ->where('product_id', $product_id)
                                ->delete();

        if ($package) {

            return [ 'error' => 0, 'message' => 'Package advantage deleted successfully' ];
        }

        return [ 'error' => 1, 'message' => 'Package advantage not deleted' ];
    }


}
