<?php

namespace App\Repositories;

use App\Models\Cache;
use App\Repositories\BaseRepository;

/**
 * Class CacheRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:45 am UTC
*/

class CacheRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'key',
        'value',
        'expiration'
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
        return Cache::class;
    }
}
