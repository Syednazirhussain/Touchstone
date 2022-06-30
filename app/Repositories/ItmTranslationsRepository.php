<?php

namespace App\Repositories;

use App\Models\ItmTranslations;
use App\Repositories\BaseRepository;

/**
 * Class ItmTranslationsRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:50 am UTC
*/

class ItmTranslationsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'status',
        'locale',
        'group',
        'key',
        'value'
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
        return ItmTranslations::class;
    }
}
