<?php

namespace App\Repositories;

use App\Models\Addresses;
// use App\Repositories\BaseRepository;

/**
 * Class AddressesRepository
 * @package App\Repositories
 * @version June 30, 2021, 11:13 am UTC
*/

class AddressesRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ship_name',
        'ship_address1',
        'ship_address2',
        'ship_city',
        'postal_code',
        'ship_state',
        'ship_country',
        'phone',
        'user_id',
        'type',
        'is_default',
        'ccId'
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
        return Addresses::class;
    }

    public function index () {

        $addresses = Addresses::select('id', 'ship_name', 'ship_address1', 'ship_address2')->paginate(10);
        if ($addresses->total() == 0) {

            return [];
        }

        return $addresses->toArray();
    }

    public function show ($id) {

        $address = Addresses::select(
                                'id', 
                                'ship_name', 
                                'ship_address1', 
                                'ship_address2',
                                'ship_city',
                                'postal_code',
                                'ship_state',
                                'ship_country',
                                'phone'
                            )
                            ->where('id', $id)
                            ->first();

        if (empty($address)) {

            return [];
        }

        return $address->toArray();
    }


}
