<?php

namespace App\Repositories;

use App\Models\ProductProductCategory;
use App\Repositories\BaseRepository;

/**
 * Class ProductProductCategoryRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:55 am UTC
*/

class ProductProductCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'category_id'
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
        return ProductProductCategory::class;
    }
}
