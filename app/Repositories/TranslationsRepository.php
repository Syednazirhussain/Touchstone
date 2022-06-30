<?php

namespace App\Repositories;

use App\Models\Translations;
// use App\Repositories\BaseRepository;

/**
 * Class TranslationsRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:59 am UTC
*/

class TranslationsRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'locale',
        'group',
        'name',
        'grouped_key',
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
        return Translations::class;
    }

    public function index () {

        $translations = Translations::select('id', 'grouped_key', 'value')->paginate(10);
        if ($translations->total() == 0) {

            return [];
        }

        return $translations->toArray();
    }

    public function edit ($id) {

        $translation = Translations::where('id', $id)->first();
        if (empty($translation)) {

            return [];
        }

        return $translation->toArray();
    }

    public function update ($id, $data = []) {

        $translation = Translations::where('id', $id)->first();
        if (!empty($translation)) {
            
            if (is_array($data["value"])) {

                $data["value"] = json_encode($data["value"]);
            }

            $translation->update($data);
            return [ 'error' => 0, 'message'  => 'Translation updated successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Translation not updated.' ];
    }

}
