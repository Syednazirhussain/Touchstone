<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('review')->delete();
        
        \DB::table('review')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'vote' => 5,
                'review' => 'Hello!',
                'first_name' => NULL,
                'user_email' => NULL,
                'user_id' => NULL,
                'is_moderate' => 0,
                'created_at' => '2016-12-21 13:21:39',
                'updated_at' => '2016-12-21 13:21:39',
                'second_name' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1,
                'vote' => 5,
                'review' => 'Comment 2',
                'first_name' => NULL,
                'user_email' => NULL,
                'user_id' => NULL,
                'is_moderate' => 0,
                'created_at' => '2016-12-21 17:48:02',
                'updated_at' => '2016-12-21 17:48:02',
                'second_name' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'product_id' => 1,
                'vote' => 5,
                'review' => 'I have more energy and have only been on Pure Body for a little over a week.',
                'first_name' => NULL,
                'user_email' => NULL,
                'user_id' => NULL,
                'is_moderate' => 0,
                'created_at' => '2016-12-22 13:01:39',
                'updated_at' => '2016-12-22 13:01:39',
                'second_name' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'product_id' => 1,
                'vote' => 5,
                'review' => 'the best product',
                'first_name' => 'Vitaliy',
                'user_email' => 'ww@ww.ww',
                'user_id' => NULL,
                'is_moderate' => 0,
                'created_at' => '2017-01-26 12:26:56',
                'updated_at' => '2017-01-26 12:26:56',
                'second_name' => 'wwww',
            ),
            4 => 
            array (
                'id' => 6,
                'product_id' => 1,
                'vote' => 5,
                'review' => 'my comment',
                'first_name' => 'aaa',
                'user_email' => 'qq@qq.ee',
                'user_id' => NULL,
                'is_moderate' => 0,
                'created_at' => '2017-01-26 15:25:31',
                'updated_at' => '2017-01-26 15:25:31',
                'second_name' => 'aaa',
            ),
            5 => 
            array (
                'id' => 7,
                'product_id' => 6,
                'vote' => 4,
                'review' => 'ппп',
                'first_name' => 'wwwwwwww',
                'user_email' => 'ww@22.ee',
                'user_id' => NULL,
                'is_moderate' => 0,
                'created_at' => '2017-01-26 16:43:56',
                'updated_at' => '2017-01-26 16:43:56',
                'second_name' => 'wwww',
            ),
        ));
        
        
    }
}