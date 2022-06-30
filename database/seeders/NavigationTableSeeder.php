<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NavigationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('navigation')->delete();
        
        \DB::table('navigation')->insert(array (
            0 => 
            array (
                'id' => 1,
                'is_parent' => 1,
                'parent_id' => 0,
                'name' => 'Collaborate',
                'link' => 'collaborate',
                'slug' => '76e111976c30c3e979657bcc107ff6fc',
                'sortOrder' => 0,
                'created_at' => '2021-04-28 16:27:02',
                'updated_at' => '2021-05-06 16:15:46',
            ),
            1 => 
            array (
                'id' => 8,
                'is_parent' => 0,
                'parent_id' => 1,
                'name' => ' Visionary Business Owner',
                'link' => 'visionary-business-owner',
                'slug' => '7c35ff2bab6ed18f291ecf9ca04dd1b7',
                'sortOrder' => 0,
                'created_at' => '2021-04-30 19:41:32',
                'updated_at' => '2021-05-06 16:15:46',
            ),
            2 => 
            array (
                'id' => 9,
                'is_parent' => 0,
                'parent_id' => 1,
                'name' => 'Affiliate',
                'link' => 'affiliate',
                'slug' => 'c639fdd4a47caedf43505fa0428e7b3a',
                'sortOrder' => 1,
                'created_at' => '2021-04-30 19:42:07',
                'updated_at' => '2021-05-06 16:15:46',
            ),
            3 => 
            array (
                'id' => 10,
                'is_parent' => 0,
                'parent_id' => 1,
                'name' => 'Influencer',
                'link' => 'influencer',
                'slug' => '53503a37ce2b509aeb2b88f3da07966d',
                'sortOrder' => 4,
                'created_at' => '2021-04-30 19:42:37',
                'updated_at' => '2021-05-06 16:15:46',
            ),
            4 => 
            array (
                'id' => 11,
                'is_parent' => 0,
                'parent_id' => 1,
                'name' => 'Touchstone Essentials Live',
                'link' => 'meet-touchstone-essentials-live',
                'slug' => '7d671d9fa4b64a2edad1ed1879afd084',
                'sortOrder' => 3,
                'created_at' => '2021-04-30 19:43:11',
                'updated_at' => '2021-05-06 16:15:46',
            ),
            5 => 
            array (
                'id' => 12,
                'is_parent' => 0,
                'parent_id' => 1,
                'name' => 'Mastermind Event',
                'link' => 'mastermind',
                'slug' => '93ee17f808fd1998cccfebcc4a45e5c4',
                'sortOrder' => 5,
                'created_at' => '2021-04-30 19:43:49',
                'updated_at' => '2021-05-06 16:15:46',
            ),
            6 => 
            array (
                'id' => 13,
                'is_parent' => 1,
                'parent_id' => 0,
                'name' => 'Community',
                'link' => 'our-blog',
                'slug' => '8a7607eff15161311ec9ad899b07c6de',
                'sortOrder' => 2,
                'created_at' => '2021-04-30 19:44:59',
                'updated_at' => '2021-05-06 16:15:46',
            ),
            7 => 
            array (
                'id' => 14,
                'is_parent' => 0,
                'parent_id' => 13,
                'name' => 'Blog',
                'link' => 'our-blog',
                'slug' => 'ae5d941a1ff03e0d130e03b966f2f0be',
                'sortOrder' => 1,
                'created_at' => '2021-04-30 19:45:36',
                'updated_at' => '2021-05-06 16:15:46',
            ),
            8 => 
            array (
                'id' => 15,
                'is_parent' => 0,
                'parent_id' => 13,
                'name' => 'Experts',
                'link' => 'experts',
                'slug' => 'da1e443e875314cb1a87dc190e4ac05e',
                'sortOrder' => 2,
                'created_at' => '2021-04-30 19:46:01',
                'updated_at' => '2021-05-06 16:15:46',
            ),
            9 => 
            array (
                'id' => 16,
                'is_parent' => 0,
                'parent_id' => 13,
                'name' => 'Reviews',
                'link' => 'reviews',
                'slug' => 'f8df8b94cd415cea7c76297009d901f9',
                'sortOrder' => 0,
                'created_at' => '2021-04-30 19:46:25',
                'updated_at' => '2021-05-06 16:15:46',
            ),
            10 => 
            array (
                'id' => 17,
                'is_parent' => 0,
                'parent_id' => 13,
                'name' => 'Social Justice',
                'link' => 'social-justice',
                'slug' => '71bf127940c71dda6b706294ad3f1589',
                'sortOrder' => 3,
                'created_at' => '2021-04-30 19:46:55',
                'updated_at' => '2021-05-06 16:15:46',
            ),
            11 => 
            array (
                'id' => 18,
                'is_parent' => 1,
                'parent_id' => 0,
                'name' => 'Why Touchstone',
                'link' => 'our-blog',
                'slug' => '3590f1bd85bc9b2d8efd264f8635c5ea',
                'sortOrder' => 1,
                'created_at' => '2021-04-30 19:47:35',
                'updated_at' => '2021-05-06 16:15:46',
            ),
            12 => 
            array (
                'id' => 19,
                'is_parent' => 0,
                'parent_id' => 18,
                'name' => 'Why Touchstone',
                'link' => 'why-touchstone',
                'slug' => 'fa66064d807b700013db8632225b26a7',
                'sortOrder' => 1,
                'created_at' => '2021-04-30 19:48:09',
                'updated_at' => '2021-05-06 16:15:46',
            ),
            13 => 
            array (
                'id' => 20,
                'is_parent' => 0,
                'parent_id' => 18,
                'name' => 'About Us',
                'link' => 'about-us',
                'slug' => '609ab1f299724e650728c665ebaaa855',
                'sortOrder' => 0,
                'created_at' => '2021-04-30 19:48:36',
                'updated_at' => '2021-05-06 16:15:46',
            ),
            14 => 
            array (
                'id' => 21,
                'is_parent' => 0,
                'parent_id' => 1,
                'name' => 'Collaborate',
                'link' => 'collaborate',
                'slug' => '597044fa7c02d7d014302dce7d627aee',
                'sortOrder' => 2,
                'created_at' => '2021-04-30 19:54:54',
                'updated_at' => '2021-05-06 16:15:46',
            ),
        ));
        
        
    }
}