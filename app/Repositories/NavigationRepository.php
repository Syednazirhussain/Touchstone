<?php

namespace App\Repositories;

use App\Models\Navigation;
// use App\Repositories\BaseRepository;

/**
 * Class NavigationRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:51 am UTC
*/

class NavigationRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'is_parent',
        'parent_id',
        'name',
        'link',
        'slug',
        'sortOrder'
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
        return Navigation::class;
    }

    public function index () {

        $navigations = Navigation::select('id', 'name', 'is_parent')->paginate(10);
        if ($navigations->total() == 0) {

            return [];
        }

        return $navigations->toArray();
    }

    public function sorting () {

        $navigations = Navigation::where('parent_id', 0)
                                ->orderby('sortOrder', 'asc')
                                ->with('children')
                                ->get();


        return $navigations->toArray();
    }


    public function create () {

        $navigations = Navigation::where('is_parent', 1)->get();
        if (empty($navigations)) {

            return [];
        }

        return $navigations->toArray();
    }

    public function edit ($id) {

        $navigation = Navigation::where('id', $id)->first();
        if (empty($navigation)) {

            return [];
        }

        $parents = [];
        if ($navigation->is_parent != 0) {

            $parents = Navigation::where('is_parent', $navigation->is_parent)
                                    ->get()
                                    ->toArray();
        }

        $payload = [
            'parents'       => $parents,
            'navigation'    => $navigation->toArray()
        ];

        return $payload;
    }

    public function store ($data = []) {

        $navigation_id = Navigation::select('id')->max('id');

        $navigation = new Navigation;
        $navigation->id = ($navigation_id + 1);
        $navigation->name = $data["name"];
        $navigation->link = $data["link"];
        $navigation->parent_id = $data["parent_id"];
        if ($navigation->save()) {

            return [ 'error' => 0, 'message'  => 'Navigation saved successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Navigation not saved.' ];
    }

    public function update ($id, $data = []) {

        $navigation = Navigation::where('id', $id)->first();
        if (!empty($navigation)) {

            $navigation->update($data);
            return [ 'error' => 0, 'message'  => 'Navigation updated successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Navigation not updated.' ];
    }

    public function destroy ($id) {

        $navigation = Navigation::where('id', $id)->first();
        if (!empty($navigation)) {

            $navigation->delete();
            return [ 'error' => 0, 'message'  => 'Navigation deleted successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Navigation not deleted.' ];
    }


}
