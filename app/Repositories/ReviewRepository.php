<?php

namespace App\Repositories;

use App\Models\Review;
use App\Repositories\BaseRepository;

/**
 * Class ReviewRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:56 am UTC
*/

class ReviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'vote',
        'review',
        'first_name',
        'user_email',
        'user_id',
        'is_moderate',
        'second_name'
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
        return Review::class;
    }
}
