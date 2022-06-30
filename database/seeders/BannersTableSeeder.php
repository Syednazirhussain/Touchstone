<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'id' => 7,
                'link' => '/shop',
                'title' => 'Shop Now',
                'alt' => 'Shop Now',
                'created_at' => '2017-05-26 02:24:38',
                'updated_at' => '2021-03-25 15:58:58',
            ),
        ));
        
        
    }
}