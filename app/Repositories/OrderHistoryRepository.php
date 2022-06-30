<?php

namespace App\Repositories;

use App\Models\OrderHistory;
use App\Repositories\BaseRepository;

/**
 * Class OrderHistoryRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:51 am UTC
*/

class OrderHistoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'product_id',
        'price',
        'price_gbp',
        'count',
        'address_id',
        'card_id',
        'is_autoship',
        'status'
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
        return OrderHistory::class;
    }
}
