<?php

namespace App\Repositories;

use App\Models\Languages;
// use App\Repositories\BaseRepository;

/**
 * Class LanguagesRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:50 am UTC
*/

class LanguagesRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'short_name',
        'locale',
        'url',
        'can_delete'
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
        return Languages::class;
    }

    public function index () {

        $languages = Languages::paginate(10);

        if ($languages->total() == 0) {

            return [];
        }

        return $languages->toArray();
    }

    public function show ($id) {

        $language = Languages::select('id', 'name')
                            ->where('id', $id)
                            ->first();

        if (empty($language)) {

            return [];
        }

        return $language->toArray();
    }

    public function edit ($id) {

        $language = Languages::where('id', $id)->first();
        if (empty($language)) {

            return [];
        }

        return $language->toArray();
    }

    public function store ($data = []) {

        $language_id = Languages::select('id')->max('id');

        $language = new Languages;
        $language->id = ($language_id + 1);
        $language->name = $data["name"];
        $language->short_name = $data["short_name"];
        $language->locale = $data["locale"];
        $language->url = $data["url"];

        if (!empty($language)) {

            $language->save();
            return [ 'error' => 0, 'message'  => 'Languages saved successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Languages not saved.' ];
    }

    public function update ($id, $data = []) {

        $language = Languages::where('id', $id)->first();
        if (!empty($language)) {

            $language->update($data);
            return [ 'error' => 0, 'message'  => 'Language updated successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Language not updated.' ];
    }

    public function destroy ($id) {

        $language = Languages::where('id', $id)->first();
        if (!empty($language)) {

            $language->delete();
            return [ 'error' => 0, 'message'  => 'Language deleted successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Language not deleted.' ];
    }

}
