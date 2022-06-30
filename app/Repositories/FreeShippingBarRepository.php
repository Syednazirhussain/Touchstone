<?php

namespace App\Repositories;

use App\Models\Countries;
use App\Models\FreeShippingBar;
// use App\Repositories\BaseRepository;

/**
 * Class FreeShippingBarRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:49 am UTC
*/

class FreeShippingBarRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'country_id',
        'price',
        'text'
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
        return FreeShippingBar::class;
    }

    public function index () {

        $freeShippingBars = FreeShippingBar::select('id', 'text', 'country_id')
                                            ->with([
                                                'country' => function ($q) {

                                                    return $q->select('id', 'name');
                                                }
                                            ])
                                            ->paginate(10);

        if ($freeShippingBars->total() == 0) {

            return [];
        }

        return $freeShippingBars->toArray();
    }

    public function create () {

        return Countries::all();
    }

    public function show ($id) {

        $freeShippingBar = FreeShippingBar::select('id', 'text', 'country_id')
                                            ->with([
                                                'country' => function ($q) {

                                                    return $q->select('id', 'name');
                                                }
                                            ])
                                            ->where('id', $id)
                                            ->first();

        if (empty($freeShippingBar)) {

            return [];
        }

        return $freeShippingBar->toArray();
    }

    public function edit ($id) {

        $freeShippingBar = FreeShippingBar::where('id', $id)
                                            ->with([
                                                'country' => function ($q) {

                                                    return $q->select('id', 'name');
                                                }
                                            ])
                                            ->first();

        $countries = Countries::all();

        if (empty($freeShippingBar)) {

            return [];
        }

        $payload = [
            'countries'     => $countries->toArray(),
            'freeShipping'  => $freeShippingBar->toArray()
        ];


        return $payload;
    }

    public function store ($data = []) {

        $free_shipping_id = FreeShippingBar::select('id')->max('id');

        $freeShippingBar = new FreeShippingBar;
        $freeShippingBar->id = ($free_shipping_id + 1);
        $freeShippingBar->country_id = $data["country_id"];
        $freeShippingBar->text = json_encode($data["text"]);

        if ($freeShippingBar->save()) {

            return [ 'error' => 0, 'message'  => 'Free shipping bar saved successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Free shipping bar not saved.' ];
    }


    public function update ($id, $data = []) {

        $freeShippingBar = FreeShippingBar::where('id', $id)->first();
        if (!empty($freeShippingBar)) {

            unset($data["country"]);

            if (is_array($data["text"])) {

                $data["text"] = json_encode($data["text"]);
            }

            $freeShippingBar->update($data);
            return [ 'error' => 0, 'message'  => 'Free shipping bar updated successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Free shipping bar not updated.' ];
    }

    public function destroy ($id) {

        $freeShippingBar = FreeShippingBar::where('id', $id)->first();
        if (!empty($freeShippingBar)) {

            $freeShippingBar->delete();
            return [ 'error' => 0, 'message'  => 'Free shipping bar deleted successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Free shipping bar not deleted successfully.' ];
    }


}
