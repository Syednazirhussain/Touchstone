<?php

namespace App\Repositories;

use App\Models\ShoppingCart;
use App\Repositories\BaseRepository;

/**
 * Class ShoppingCartRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:57 am UTC
*/

class ShoppingCartRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'instance',
        'content'
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
        return ShoppingCart::class;
    }
}
