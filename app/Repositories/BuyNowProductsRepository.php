<?php

namespace App\Repositories;

use App\Models\BuyNowProducts;
use App\Repositories\BaseRepository;

/**
 * Class BuyNowProductsRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:44 am UTC
*/

class BuyNowProductsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'buy_now_id',
        'product_id',
        'quantity'
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
        return BuyNowProducts::class;
    }
}
