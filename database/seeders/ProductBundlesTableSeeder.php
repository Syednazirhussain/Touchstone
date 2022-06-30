<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductBundlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_bundles')->delete();
        
        \DB::table('product_bundles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 17,
                'bundle_product_id' => 18,
                'order' => 1,
                'count_product' => 3,
            'title' => '{"en":"3 Pack (Big Savings)","pl":"3-PAK (SPORA OSZCZ\\u0118DNO\\u015a\\u0106)","jp":"3 Pack (Big Savings)","ja":"3 Pack (Big Savings)","es":"3 Pack (Big Savings)","th":"3 Pack (Big Savings)"}',
                'price_text' => '{"en":"Big Savings: as low as %price% per canister!","pl":"Spora Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za zbiornik!","jp":"Big Savings: as low as %price% per canister!","ja":"Big Savings: as low as %price% per canister!","es":"Big Savings: as low as %price% per canister!","th":"Big Savings: as low as %price% per canister!"}',
                'created_at' => '2017-12-10 21:52:42',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 17,
                'bundle_product_id' => 19,
                'order' => 2,
                'count_product' => 5,
            'title' => '{"en":"5 Pack (Best Savings)","pl":"5-PAK (NAJLEPSZA OSZCZ\\u0118DNO\\u015a\\u0106)","jp":"5 Pack (Best Savings)","ja":"5 Pack (Best Savings)","es":"5 Pack (Best Savings)","th":"5 Pack (Best Savings)"}',
                'price_text' => '{"en":"Best Savings: as low as %price% per canister!","pl":"Najlepsza Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za pakiet!","jp":"Best Savings: as low as %price% per canister!","ja":"Best Savings: as low as %price% per canister!","es":"Best Savings: as low as %price% per canister!","th":"Best Savings: as low as %price% per canister!"}',
                'created_at' => '2017-12-10 21:54:46',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 20,
                'bundle_product_id' => 21,
                'order' => 1,
                'count_product' => 3,
            'title' => '{"en":"3 Pack (Big Savings)","pl":"3-PAK (SPORA OSZCZ\\u0118DNO\\u015a\\u0106)","jp":"3 Pack (Big Savings)","ja":"3 Pack (Big Savings)","es":"3 Pack (Big Savings)","th":"3 Pack (Big Savings)"}',
                'price_text' => '{"en":"Big Savings: as low as %price% per canister!","pl":"Spora Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za zbiornik!","jp":"Big Savings: as low as %price% per canister!","ja":"Big Savings: as low as %price% per canister!","es":"Big Savings: as low as %price% per canister!","th":"Big Savings: as low as %price% per canister!"}',
                'created_at' => '2017-12-10 21:56:20',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 20,
                'bundle_product_id' => 22,
                'order' => 2,
                'count_product' => 5,
            'title' => '{"en":"5 Pack (Best Savings)","pl":"5-PAK (NAJLEPSZA OSZCZ\\u0118DNO\\u015a\\u0106)","jp":"5 Pack (Best Savings)","ja":"5 Pack (Best Savings)","es":"5 Pack (Best Savings)","th":"5 Pack (Best Savings)"}',
                'price_text' => '{"en":"Best Savings: as low as %price% per canister!","pl":"Najlepsza Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za zbiornik!","jp":"Best Savings: as low as %price% per canister!","ja":"Best Savings: as low as %price% per canister!","es":"Best Savings: as low as %price% per canister!","th":"Best Savings: as low as %price% per canister!"}',
                'created_at' => '2017-12-10 21:56:35',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 6,
                'bundle_product_id' => 23,
                'order' => 1,
                'count_product' => 4,
            'title' => '{"en":"Savings Pack (Buy 3, Get 1 Free)","pl":"Pakiet oszcz\\u0119dno\\u015bciowy (Kup 3, dosta\\u0144 1 ZA DARMO)","jp":"Savings Pack (Buy 3, Get 1 Free)","ja":"Savings Pack (Buy 3, Get 1 Free)","es":"Savings Pack (Buy 3, Get 1 Free)","th":"Savings Pack (Buy 3, Get 1 Free)"}',
                'price_text' => '{"en":"Best Savings: as low as %price% per bottle!","pl":"Najlepsza Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za butelk\\u0119!","jp":"Best Savings: as low as %price% per bottle!","ja":"Best Savings: as low as %price% per bottle!","es":"Best Savings: as low as %price% per bottle!","th":"Best Savings: as low as %price% per bottle!"}',
                'created_at' => '2017-12-10 22:00:33',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 3,
                'bundle_product_id' => 4,
                'order' => 1,
                'count_product' => 4,
            'title' => '{"en":"Savings Pack (Buy 3, Get 1 Free)","pl":"PAKIET OSZCZ\\u0118DNO\\u015aCIOWY (KUP 3, DOSTA\\u0143 1 ZA DARMO)","jp":"Savings Pack (Buy 3, Get 1 Free)","ja":"Savings Pack (Buy 3, Get 1 Free)","es":"Savings Pack (Buy 3, Get 1 Free)","th":"Savings Pack (Buy 3, Get 1 Free)"}',
                'price_text' => '{"en":"Best Savings: as low as %price% per bottle!","pl":"Najlepsza Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za butelk\\u0119!","jp":"Best Savings: as low as %price% per bottle!","ja":"Best Savings: as low as %price% per bottle!","es":"Best Savings: as low as %price% per bottle!","th":"Best Savings: as low as %price% per bottle!"}',
                'created_at' => '2017-12-10 22:02:47',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 30,
                'bundle_product_id' => 31,
                'order' => 2,
                'count_product' => 3,
            'title' => '{"en":"3 Pack (Big Savings)","pl":"3-PAK (SPORA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"3 Pack (Big Savings)","es":"3 Pack (Big Savings)","th":"3 Pack (Big Savings)"}',
                'price_text' => '{"en":"Big Savings: as low as %price% per bottle!","pl":"Sizable Savings: even the only% price% for a bottle!","ja":"Big Savings: as low as %price% per bottle!","es":"Big Savings: as low as %price% per bottle!","th":"Big Savings: as low as %price% per bottle!"}',
                'created_at' => '2018-08-06 20:32:53',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 30,
                'bundle_product_id' => 32,
                'order' => 3,
                'count_product' => 5,
            'title' => '{"en":"5 Pack (Best Savings)","pl":"5-PAK (NAJLEPSZA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"5 Pack (Best Savings)","es":"5 Pack (Best Savings)","th":"5 Pack (Best Savings)"}',
                'price_text' => '{"en":"Best Savings: as low as %price% per bottle!","pl":"Najlepsza Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za butelka!","ja":"Best Savings: as low as %price% per bottle!","es":"Best Savings: as low as %price% per bottle!","th":"Best Savings: as low as %price% per bottle!"}',
                'created_at' => '2018-08-06 20:34:52',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 33,
                'bundle_product_id' => 34,
                'order' => 2,
                'count_product' => 3,
            'title' => '{"en":"3 Pack (Big Savings)","pl":"3-PAK (SPORA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"3 Pack (Big Savings)","es":"3 Pack (Big Savings)","th":"3 Pack (Big Savings)"}',
                'price_text' => '{"en":"Big Savings: as low as %price% per bottle!","pl":"Spora Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za butelka!","ja":"Big Savings: as low as %price% per bottle!","es":"Big Savings: as low as %price% per bottle!","th":"Big Savings: as low as %price% per bottle!"}',
                'created_at' => '2018-08-06 20:36:14',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 33,
                'bundle_product_id' => 35,
                'order' => 3,
                'count_product' => 5,
            'title' => '{"en":"5 Pack (Best Savings)","pl":"5-PAK (NAJLEPSZA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"5 Pack (Best Savings)","es":"5 Pack (Best Savings)","th":"5 Pack (Best Savings)"}',
                'price_text' => '{"en":"Best Savings: as low as %price% per bottle!","pl":"Najlepsza Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za butelka!","ja":"Best Savings: as low as %price% per bottle!","es":"Best Savings: as low as %price% per bottle!","th":"Best Savings: as low as %price% per bottle!"}',
                'created_at' => '2018-08-06 20:37:10',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 36,
                'bundle_product_id' => 37,
                'order' => 2,
                'count_product' => 3,
            'title' => '{"en":"3 Pack (Big Savings)","pl":"3-PAK (SPORA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"3 Pack (Big Savings)","es":"3 Pack (Big Savings)","th":"3 Pack (Big Savings)"}',
                'price_text' => '{"en":"Big Savings: as low as %price% per bottle!","pl":"Spora Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za butelka!","ja":"Big Savings: as low as %price% per bottle!","es":"Big Savings: as low as %price% per bottle!","th":"Big Savings: as low as %price% per bottle!"}',
                'created_at' => '2018-08-06 20:39:24',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 36,
                'bundle_product_id' => 38,
                'order' => 3,
                'count_product' => 5,
            'title' => '{"en":"5 Pack (Best Savings)","pl":"5-PAK (NAJLEPSZA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"5 Pack (Best Savings)","es":"5 Pack (Best Savings)","th":"5 Pack (Best Savings)"}',
                'price_text' => '{"en":"Best Savings: as low as %price% per bottle!","pl":"Najlepsza Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za butelka!","ja":"Best Savings: as low as %price% per bottle!","es":"Best Savings: as low as %price% per bottle!","th":"Best Savings: as low as %price% per bottle!"}',
                'created_at' => '2018-08-06 20:39:59',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 39,
                'bundle_product_id' => 40,
                'order' => 2,
                'count_product' => 3,
            'title' => '{"en":"3 Pack (Big Savings)","pl":"3-PAK (SPORA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"3 Pack (Big Savings)","es":"3 Pack (Big Savings)","th":"3 Pack (Big Savings)"}',
                'price_text' => '{"en":"Big Savings: as low as %price% per jar!","pl":"Spora Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za butelka!","ja":"Big Savings: as low as %price% per canister!","es":"Big Savings: as low as %price% per canister!","th":"Big Savings: as low as %price% per jar!"}',
                'created_at' => '2018-08-06 20:40:44',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 39,
                'bundle_product_id' => 41,
                'order' => 3,
                'count_product' => 5,
            'title' => '{"en":"5 Pack (Best Savings)","pl":"5-PAK (NAJLEPSZA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"5 Pack (Best Savings)","es":"5 Pack (Best Savings)","th":"5 Pack (Best Savings)"}',
                'price_text' => '{"en":"Best Savings: as low as %price% per jar!","pl":"Najlepsza Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za butelka!","ja":"Best Savings: as low as %price% per bottle!","es":"Best Savings: as low as %price% per bottle!","th":"Best Savings: as low as %price% per jar!"}',
                'created_at' => '2018-08-06 20:41:20',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 2,
                'bundle_product_id' => 43,
                'order' => 1,
                'count_product' => 3,
            'title' => '{"en":"3 Pack (Big Savings)","pl":"3-PAK (SPORA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"3 Pack (Big Savings)","es":"3 Pack (Big Savings)","th":"3 Pack (Big Savings)"}',
                'price_text' => '{"en":"Big Savings: as low as %price% per bottle!","pl":"Spora Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za butelk\\u0119!","ja":"Big Savings: as low as %price% per bottle!","es":"Big Savings: as low as %price% per bottle!","th":"Big Savings: as low as %price% per bottle!"}',
                'created_at' => '2019-06-26 21:41:04',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 2,
                'bundle_product_id' => 44,
                'order' => 2,
                'count_product' => 5,
            'title' => '{"en":"5 Pack (Best Savings)","pl":"5-PAK (NAJLEPSZA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"5 Pack (Best Savings)","es":"5 Pack (Best Savings)","th":"5 Pack (Best Savings)"}',
                'price_text' => '{"en":"Best Savings: as low as %price% per bottle!","pl":"Najlepsza Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za butelk\\u0119!","ja":"Best Savings: as low as %price% per bottle!","es":"Best Savings: as low as %price% per bottle!","th":"Best Savings: as low as %price% per bottle!"}',
                'created_at' => '2019-06-26 21:42:07',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 48,
                'bundle_product_id' => 49,
                'order' => 2,
                'count_product' => 3,
            'title' => '{"en":"3 Pack (Big Savings)","pl":"3-PAK (SPORA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"3 Pack (Big Savings)","es":"3 Pack (Big Savings)","th":"3 Pack (Big Savings)"}',
                'price_text' => '{"en":"Big Savings: as low as %price% per bottle!","pl":"Spora Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za butelka!","ja":"Big Savings: as low as %price% per bottle!","es":"Big Savings: as low as %price% per bottle!","th":"Big Savings: as low as %price% per bottle!"}',
                'created_at' => '2019-08-17 19:21:16',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 45,
                'bundle_product_id' => 46,
                'order' => 2,
                'count_product' => 3,
            'title' => '{"en":"3 Pack (Big Savings)","pl":"3-PAK (SPORA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"3 Pack (Big Savings)","es":"3 Pack (Big Savings)","th":"3 Pack (Big Savings)"}',
                'price_text' => '{"en":"Big Savings: as low as %price% per bottle!","pl":"Spora Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za butelka!","ja":"Big Savings: as low as %price% per bottle!","es":"Big Savings: as low as %price% per bottle!","th":"Big Savings: as low as %price% per bottle!"}',
                'created_at' => '2019-08-17 19:21:18',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 45,
                'bundle_product_id' => 47,
                'order' => 3,
                'count_product' => 5,
            'title' => '{"en":"5 Pack (Best Savings)","pl":"5-PAK (NAJLEPSZA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"5 Pack (Best Savings)","es":"5 Pack (Best Savings)","th":"5 Pack (Best Savings)"}',
                'price_text' => '{"en":"Best Savings: as low as %price% per bottle!","pl":"Najlepsza Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za butelka!","ja":"Best Savings: as low as %price% per bottle!","es":"Best Savings: as low as %price% per bottle!","th":"Best Savings: as low as %price% per bottle!"}',
                'created_at' => '2019-08-17 19:23:45',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 59,
                'bundle_product_id' => 60,
                'order' => 1,
                'count_product' => 3,
            'title' => '{"en":"3 Pack (Big Savings)","pl":"3-PAK (SPORA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"3 Pack (Big Savings)","es":"3 Pack (Big Savings)","th":"3 Pack (Big Savings)"}',
                'price_text' => '{"en":"Big Savings: as low as %price% per pack!","pl":"Spora Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za pakiet!","ja":"Big Savings: as low as %price% per pack!","es":"Big Savings: as low as %price% per pack!","th":"Big Savings: as low as %price% per pack!"}',
                'created_at' => '2020-02-05 15:37:59',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 59,
                'bundle_product_id' => 61,
                'order' => 2,
                'count_product' => 5,
            'title' => '{"en":"5 Pack (Best Savings)","pl":"5-PAK (NAJLEPSZA OSZCZ\\u0118DNO\\u015a\\u0106)","ja":"5 Pack (Best Savings)","es":"5 Pack (Best Savings)","th":"5 Pack (Best Savings)"}',
                'price_text' => '{"en":"Best Savings: as low as %price% per pack!","pl":"Spora Oszcz\\u0119dno\\u015b\\u0107: nawet jedyne %price% za pakiet!","ja":"Best Savings: as low as %price% per pack!","es":"Best Savings: as low as %price% per pack!","th":"Best Savings: as low as %price% per pack!"}',
                'created_at' => '2020-02-05 15:41:46',
                'updated_at' => '2020-10-05 23:50:31',
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 1,
                'bundle_product_id' => 18,
                'order' => 7888,
                'count_product' => 294,
                'title' => '{"en":"Culpa consequatur ","pl":"Ut excepteur nihil c","ja":"Officia quaerat mole","es":"Ea ut totam amet iu","th":"Non velit ut Nam al"}',
                'price_text' => '{"en":"498","pl":"622","ja":"158","es":"275","th":"2"}',
                'created_at' => '2021-05-31 08:10:44',
                'updated_at' => '2021-05-31 08:10:44',
            ),
        ));
        
        
    }
}