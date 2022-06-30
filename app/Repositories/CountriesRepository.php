<?php

namespace App\Repositories;

use DB;
use App\Models\Countries;
use App\Repositories\BaseRepository;

/**
 * Class CountriesRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:47 am UTC
*/

class CountriesRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'iso3',
        'currency',
        'is_active',
        'min_checkout_price',
        'max_checkout_price',
        'max_checkout_unit_count',
        'show_subscribing_ontraport',
        'has_shipping',
        'has_residence'
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
        return Countries::class;
    }

    public function index () {

        $countries = Countries::select('id', 'name', 'iso3')->paginate(10);

        if ($countries->total() == 0) {

            return [];
        }

        return $countries->toArray();
    }

    public function show ($id) {

        $country = Countries::select('id', 'name')
                            ->where('id', $id)
                            ->first();

        if (empty($country)) {

            return [];
        }

        $country = $country->toArray();
        $country['name'] = json_decode($country['name'], 1);

        return $country;
    }

    public function edit ($id) {

        $country = Countries::where('id', $id)
                            ->first();

        if (empty($country)) {

            return [];
        }

        $country = $country->toArray();
        $country['name'] = json_decode($country['name'], 1);

        return $country;
    }

    public function store ($data = []) {

        try {

            DB::beginTransaction();

            $country_id = Countries::select('id')->max('id');

            $country = new Countries;            
            $country->id = ($country_id + 1);
            $country->name = json_encode($data['name']);
            $country->iso3 = $data['iso3'];
            $country->min_checkout_price  = $data['min_checkout_price'];
            $country->max_checkout_unit_count  = $data['max_checkout_unit_count'];
            $country->currency  = $data['currency'];
            $country->is_active  = $data['is_active'];
            $country->show_subscribing_ontraport  = $data['show_subscribing_ontraport'];
            $country->has_shipping  = $data['has_shipping'];
            $country->has_residence  = $data['has_residence'];
            $country->max_checkout_price  = $data['max_checkout_price'];

            if ($country->save()) {
                
                DB::commit();
                return [ 'error' => 0, 'message'  => 'Country saved successfully.' ]; 
            }

            return [ 'error' => 1, 'message'  => 'Country not saved.' ];

        } catch (Exception $ex) {

            DB::rollback();
            return [ 'error' => 1, 'message'  => $ex->getMessage() ];
        }
    }

    public function update ($id, $data = []) {

        $name = $data['name'];

        unset($data['name']);
        $data['name'] = json_encode($name);

        $country = Countries::where('id', $id)->first();
        if (!empty($country)) {

            $country->update($data);
            return [ 'error' => 0, 'message'  => 'Country updated successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Country not updated successfully.' ];
    }

    public function destroy ($id) {

        $country = Countries::where('id', $id)->first();
        if (!empty($country)) {

            $country->delete();
            return [ 'error' => 0, 'message'  => 'Country deleted successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Country not deleted successfully.' ];
    }


}
