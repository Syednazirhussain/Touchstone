<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'English',
                'short_name' => 'English',
                'locale' => 'en-US',
                'url' => 'en',
                'can_delete' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Polski',
                'short_name' => 'Polski',
                'locale' => 'pl-PL',
                'url' => 'pl',
                'can_delete' => 1,
            ),
            2 => 
            array (
                'id' => 5,
                'name' => '日本語',
                'short_name' => '日本語',
                'locale' => 'ja-JP',
                'url' => 'ja',
                'can_delete' => 1,
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Español',
                'short_name' => 'Español',
                'locale' => 'es-ES',
                'url' => 'es',
                'can_delete' => 1,
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'ไทย',
                'short_name' => 'ไทย',
                'locale' => 'th-th',
                'url' => 'th',
                'can_delete' => 1,
            ),
        ));
        
        
    }
}