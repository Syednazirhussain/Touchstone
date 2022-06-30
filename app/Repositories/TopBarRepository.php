<?php

namespace App\Repositories;

use App\Models\TopBar;
// use App\Repositories\BaseRepository;

/**
 * Class TopBarRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:59 am UTC
*/

class TopBarRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bar_text',
        'button_text',
        'button_link'
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
        return TopBar::class;
    }

    public function index () {

        $topbar = TopBar::paginate(10);
        if (empty($topbar)) {

            return [];
        }

        return $topbar->toArray();   
    }

    public function show ($id) {

        $topbar = TopBar::select('id', 'bar_text', 'button_text', 'button_link')
                            ->where('id', $id)
                            ->first();

        if (empty($topbar)) {

            return [];
        }

        return $topbar->toArray();
    }

    public function edit ($id) {

        $topbar = TopBar::where('id', $id)->first();
        if (empty($topbar)) {

            return [];
        }

        return $topbar->toArray();   
    }

    public function store ($data = []) {

        $topbar = TopBar::firstOrNew($data);
        if (!empty($topbar)) {

            $topbar->save();
            return [ 'error' => 0, 'message'  => 'TopBar saved successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'TopBar not saved successfully.' ];
    }

    public function update ($id, $data = []) {

        $topbar = TopBar::where('id', $id)->first();
        if (!empty($topbar)) {

            $data['bar_text']       = json_encode($data['bar_text']);
            $data['button_text']    = json_encode($data['button_text']);

            $topbar->update($data);
            return [ 'error' => 0, 'message'  => 'TopBar updated successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'TopBar not updated successfully.' ];
    }

    public function destroy ($id) {

        $topbar = TopBar::where('id', $id)->first();
        if (!empty($topbar)) {

            $topbar->delete();
            return [ 'error' => 0, 'message'  => 'TopBar deleted successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'TopBar not deleted successfully.' ];
    }


}
