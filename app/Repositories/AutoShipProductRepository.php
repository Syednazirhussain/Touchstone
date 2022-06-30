<?php

namespace App\Repositories;

use App\Models\AutoShipProduct;
use App\Repositories\BaseRepository;

/**
 * Class AutoShipProductRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:40 am UTC
*/

class AutoShipProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'autoship_id',
        'product_id',
        'count'
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
        return AutoShipProduct::class;
    }
}
