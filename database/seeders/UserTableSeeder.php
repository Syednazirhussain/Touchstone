<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user')->delete();
        
        \DB::table('user')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'Admin2017',
                'password' => bcrypt("test99"),
                'is_logged_in' => 1,
                'created_at' => '2021-07-08 05:40:47',
                'updated_at' => '2021-07-08 05:40:47',
            ),
        ));
        
        
    }
}