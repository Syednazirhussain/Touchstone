<?php

namespace App\Repositories;

use App\Models\Icons;
use App\Repositories\BaseRepository;

/**
 * Class IconsRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:49 am UTC
*/

class IconsRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'text',
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
        return Icons::class;
    }

    public function index ($product_id) {

        $icons = Icons::where('product_id', $product_id)
                    ->with([
                        'product' => function ($q) {

                            return $q->select('id', 'title');
                        }
                    ])
                    ->paginate(10);

        return $icons->toArray();
    }

   public function show ($product_id, $id) {

        $icon = Icons::where('id', $id)
                    ->where('product_id', $product_id)
                    ->with([
                        'product' => function ($q) {

                            return $q->select('id', 'title');
                        }
                    ])
                    ->first();

        if (empty($icon)) {

            return [];
        }

        return $icon->toArray();
    }

    public function edit ($product_id, $id) {

        $icon = Icons::where('id', $id)
                        ->where('product_id', $product_id)
                        ->with([
                            'product' => function ($q) {

                                return $q->select('id', 'title');
                            }
                        ])
                        ->first();

        if (empty($icon)) {

            return [];
        }

        return $icon->toArray();
    }

    public function update ($product_id, $id, $data = []) {

        $id = $data["id"];
        $product_id = $data["product_id"];

        $icon = Icons::where('id', $id)
                    ->where('product_id', $product_id)
                    ->update([
                        'text'  => json_encode($data['text']),
                        'order' => $data['order'],
                    ]);

        if ($icon) {

            return [ 'error' => 0, 'message' => 'Product icon updated successfully' ];
        }

        return [ 'error' => 1, 'message' => 'Product icon not updated' ];
    }


    public function destroy ($product_id, $id) {

        $icon = Icons::where('id', $id)
                        ->where('product_id', $product_id)
                        ->delete();

        if ($icon) {

            return [ 'error' => 0, 'message' => 'Product icon deleted successfully' ];
        }

        return [ 'error' => 1, 'message' => 'Product icon not deleted' ];
    }


}
