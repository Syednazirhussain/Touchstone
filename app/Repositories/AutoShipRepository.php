<?php

namespace App\Repositories;

use App\Models\AutoShip;
use App\Repositories\BaseRepository;

/**
 * Class AutoShipRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:38 am UTC
*/

class AutoShipRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'next_process_date'
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
        return AutoShip::class;
    }
}
