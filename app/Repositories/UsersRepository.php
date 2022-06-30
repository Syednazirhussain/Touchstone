<?php

namespace App\Repositories;

use App\Models\Users;
use App\Models\Countries;
use App\Repositories\BaseRepository;

/**
 * Class UsersRepository
 * @package App\Repositories
 * @version June 25, 2021, 5:00 am UTC
*/

class UsersRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'password',
        'remember_token',
        'name_first',
        'name_last',
        'ref',
        'customer_type_id',
        'tax_id',
        'email_opt_out',
        'country_id',
        'is_admin',
        'phone',
        'is_member_paid',
        'ontraport_id',
        'locale',
        'website_alias',
        'is_subscribed_ontraport',
        'country_residence',
        'upgrade_eligible',
        'google_id',
        'is_password_changed'
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
        return Users::class;
    }

    public function index ($page = 1, $search = null) {

        $users = Users::select('id', 'email', 'ref', 'is_admin');

        if (!is_null($search)) {
            $users = $users->where('email', 'like', '%'. $search .'%');
        }

        $users = $users->paginate(10, ['id', 'email', 'ref', 'is_admin'], 'page', $page);

        return $users->toArray();
    }

    public function edit($id) {

        $user = Users::select(
                        'id', 
                        'email', 
                        'name_first', 
                        'name_last', 
                        'ref', 
                        'is_admin', 
                        'customer_type_id', 
                        'country_id'
                    )
                    ->where('id', $id)
                    ->with([
                        'country' => function ($q) {

                            return $q->select('id', 'name');
                        }
                    ])
                    ->first();

        $countries = Countries::select('id', 'name')->get();

        $data = [
            'user'      => $user->toArray(),
            'countries' => $countries->toArray()
        ];

        return $data;
    }

    public function find($id) {

        $user = Users::select('id', 'email', 'name_first', 'ref')->where('id', $id)->first();
        
        if (empty($user)) {

            return [];   
        }

        return $user->toArray();
    }

    public function update ($id, $data = []) {

        if (array_key_exists('country', $data)) {

            unset($data['country']);
        }

        $is_updated =  Users::where('id', $id)->update($data);
        if ($is_updated) {

            return [
                        'error'     => 0,  
                        'message'   => 'User updated successfully'
                    ];
        }

        return [
                    'error'     => 1,
                    'message'   => 'User not updated.'
                ];

    }

    public function destroy ($user_id) {

        $is_deleted =  Users::where('id', $user_id)->delete();
        if ($is_deleted) {

            return [
                        'error'     => 0,  
                        'message'   => 'User deleted successfully'
                    ];
        }

        return [
                    'error'     => 1,
                    'message'   => 'User not deleted.'
                ];
    }

    public function search ($query) {

        $users = Users::select('id', 'email')
                        ->where('name_first', 'LIKE', '%'.$query.'%')
                        ->orwhere('name_last', 'LIKE', '%'.$query.'%')
                        ->orwhere('email', 'LIKE', '%'.$query.'%')
                        ->paginate(10);
        
        if ($users->total() == 0) {

            return [];   
        }

        return $users->toArray();
    }

}
