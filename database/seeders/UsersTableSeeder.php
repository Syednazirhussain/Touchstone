<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'email' => 'admin@admin.com',
                'password' => bcrypt('gOlpik0#@!'),
                'remember_token' => 'WRFaQXO4sOZZRdMVutpbu8i1umWtw8yxgR2WqVaPqmGq5EWEc80qNDyMr6iZ',
                'created_at' => '2016-12-22 10:46:25',
                'updated_at' => '2017-03-01 00:55:16',
                'name_first' => NULL,
                'name_last' => NULL,
                'ref' => '1',
                'customer_type_id' => 3,
                'tax_id' => NULL,
                'email_opt_out' => 0,
                'country_id' => NULL,
                'is_admin' => 1,
                'phone' => NULL,
                'is_member_paid' => '0',
                'ontraport_id' => '0',
                'locale' => 'en-US',
                'website_alias' => NULL,
                'is_subscribed_ontraport' => 1,
                'country_residence' => NULL,
                'upgrade_eligible' => 1,
                'google_id' => NULL,
                'is_password_changed' => 1,
            ),
        ));
        
        
    }
}