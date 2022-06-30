<?php

namespace App\Repositories;

use App\Models\CountryProducts;
use App\Repositories\BaseRepository;

/**
 * Class CountryProductsRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:47 am UTC
*/

class CountryProductsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'country_id',
        'product_id',
        'max_buy_count',
        'is_active',
        'is_pack',
        'is_best_pack'
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
        return CountryProducts::class;
    }
}
