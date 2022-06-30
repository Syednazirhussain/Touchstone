<?php

namespace App\Repositories;

use App\Models\CartSummary;
use App\Repositories\BaseRepository;

/**
 * Class CartSummaryRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:46 am UTC
*/

class CartSummaryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type_points',
        'user_id',
        'user_assigned_type',
        'status_cart',
        'user_assigned_id',
        'user_assigned_customer_type_id',
        'is_new_customer',
        'promocode'
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
        return CartSummary::class;
    }
}
