<?php

namespace App\Repositories;

use App\Models\AutoLoginHashes;
use App\Repositories\BaseRepository;

/**
 * Class AutoLoginHashesRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:42 am UTC
*/

class AutoLoginHashesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hash'
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
        return AutoLoginHashes::class;
    }
}
