<?php

namespace App\Repositories;

use App\Models\PaymentInformationCountries;
use App\Repositories\BaseRepository;

/**
 * Class PaymentInformationCountriesRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:53 am UTC
*/

class PaymentInformationCountriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'country_id',
        'payment_information_id',
        'can_hemp'
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
        return PaymentInformationCountries::class;
    }
}
