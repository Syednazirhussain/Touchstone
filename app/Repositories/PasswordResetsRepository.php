<?php

namespace App\Repositories;

use App\Models\PasswordResets;
use App\Repositories\BaseRepository;

/**
 * Class PasswordResetsRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:52 am UTC
*/

class PasswordResetsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'token'
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
        return PasswordResets::class;
    }
}
