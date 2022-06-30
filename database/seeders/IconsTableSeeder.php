<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IconsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('icons')->delete();
        
        \DB::table('icons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'text' => '{"en":"Heavy Metal Detox","pl":"Detoksykuje Metale Ci\\u0119\\u017ckie","jp":"\\u91cd\\u91d1\\u5c5e\\u3092\\u30c7\\u30c8\\u30c3\\u30af\\u30b9","ja":"\\u91cd\\u91d1\\u5c5e\\u3092\\u30c7\\u30c8\\u30c3\\u30af\\u30b9","es":"Detoxes Heavy Metals","th":"Heavy Metal Detox"}',
                'created_at' => '2017-05-05 15:45:26',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1,
                'text' => '{"en":"Gut & Body Detox","pl":"Detoksykacja Organizmu & Trawienia","jp":"\\u8eab\\u4f53\\u3068\\u6d88\\u5316\\u5668\\u5b98\\u306e\\u304a\\u6383\\u9664","ja":"\\u8eab\\u4f53\\u3068\\u6d88\\u5316\\u5668\\u5b98\\u306e\\u304a\\u6383\\u9664","es":"Gut & Body Detox","th":"Gut & Body Detox"}',
                'created_at' => '2017-05-05 15:46:43',
                'updated_at' => '2021-02-05 17:29:48',
                'order' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 1,
                'text' => '{"en":"Lab Tested for Purity","pl":"Testowane Laboratoryjnie dla Czysto\\u015bci","jp":"\\u7814\\u7a76\\u6240\\u306b\\u3066\\u7d14\\u5ea6\\u306e\\u8a3c\\u660e\\u6e08\\u307f","ja":"\\u7814\\u7a76\\u6240\\u306b\\u3066\\u7d14\\u5ea6\\u306e\\u8a3c\\u660e\\u6e08\\u307f","es":"Lab Tested for Purity","th":"Lab Tested for Purity"}',
                'created_at' => '2017-05-05 15:47:01',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 2,
            ),
            3 => 
            array (
                'id' => 8,
                'product_id' => 1,
                'text' => '{"en":"Natural Mineral, Safe for All Ages","pl":"Naturalny Minera\\u0142","jp":"\\u5168\\u3066\\u306e\\u5e74\\u9f62\\u306b\\u5b89\\u5168\\u306a\\u5929\\u7136\\u30df\\u30cd\\u30e9\\u30eb","ja":"\\u5168\\u3066\\u306e\\u5e74\\u9f62\\u306b\\u5b89\\u5168\\u306a\\u5929\\u7136\\u30df\\u30cd\\u30e9\\u30eb","es":"Natural Mineral, Safe for All Ages","th":"Natural Mineral, Safe for All Ages"}',
                'created_at' => '2017-05-10 17:57:24',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 3,
            ),
            4 => 
            array (
                'id' => 9,
                'product_id' => 2,
                'text' => '{"en":"Advanced Cellular Cleanse","pl":"Zaawansowane Oczyszczanie Kom\\u00f3rkowe","jp":"Advanced Cellular Cleanse","ja":"\\u30cf\\u30a4\\u30ec\\u30d9\\u30eb\\u306e\\u7d30\\u80de\\u6d17\\u6d44","es":"Advanced Cellular Cleanse","th":"Advanced Cellular Cleanse"}',
                'created_at' => '2017-05-10 17:59:40',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            5 => 
            array (
                'id' => 10,
                'product_id' => 2,
                'text' => '{"en":"Detoxes Heavy Metals","pl":"Detoksykuje Metale Ci\\u0119\\u017ckie","jp":"Detoxes Heavy Metals","ja":"\\u91cd\\u91d1\\u5c5e\\u3092\\u30c7\\u30c8\\u30c3\\u30af\\u30b9","es":"Detoxes Heavy Metals","th":"Detoxes Heavy Metals"}',
                'created_at' => '2017-05-10 17:59:50',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            6 => 
            array (
                'id' => 11,
                'product_id' => 2,
                'text' => '{"en":"Natural Mineral, Safe for All Ages","pl":"Naturalny Minera\\u0142","jp":"Natural Mineral, Safe for All Ages","ja":"\\u5929\\u7136\\u30df\\u30cd\\u30e9\\u30eb\\u306a\\u306e\\u3067\\u3042\\u3089\\u3086\\u308b\\u5e74\\u9f62\\u306b\\u3068\\u3063\\u3066\\u5b89\\u5168","es":"Natural Mineral, Safe for All Ages","th":"Natural Mineral, Safe for All Ages"}',
                'created_at' => '2017-05-10 18:00:00',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            7 => 
            array (
                'id' => 12,
                'product_id' => 2,
                'text' => '{"en":"Lab Tested for Purity","pl":"Testowane Laboratoryjnie dla Czysto\\u015bci","jp":"Lab Tested for Purity","ja":"\\u7814\\u7a76\\u6240\\u306b\\u3066\\u7d14\\u5ea6\\u3092\\u8a3c\\u660e\\u6e08\\u307f","es":"Lab Tested for Purity","th":"Lab Tested for Purity"}',
                'created_at' => '2017-05-10 18:00:08',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            8 => 
            array (
                'id' => 13,
                'product_id' => 16,
                'text' => '{"en":"USDA Organic","pl":"Organiczne USDA","jp":"USDA Organic","ja":"USDA Organic","es":"USDA Organic","th":"USDA Organic"}',
                'created_at' => '2017-05-10 18:16:30',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            9 => 
            array (
                'id' => 14,
                'product_id' => 16,
                'text' => '{"en":"Advanced Cellular Detox","pl":"Zaawansowane Oczyszczanie Kom\\u00f3rkowe","jp":"Advanced Cellular Detox","ja":"Advanced Cellular Detox","es":"Advanced Cellular Detox","th":"Advanced Cellular Detox"}',
                'created_at' => '2017-05-10 18:16:41',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            10 => 
            array (
                'id' => 15,
                'product_id' => 16,
                'text' => '{"en":"Plant-Sourced Nutrition","pl":"Od\\u017cywianie Ro\\u015blinami","jp":"Plant-Sourced Nutrition","ja":"Plant-Sourced Nutrition","es":"Plant-Sourced Nutrition","th":"Plant-Sourced Nutrition"}',
                'created_at' => '2017-05-10 18:16:51',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            11 => 
            array (
                'id' => 16,
                'product_id' => 16,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 18:17:00',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            12 => 
            array (
                'id' => 17,
                'product_id' => 3,
                'text' => '{"en":"Made with Organic Fruits & Herbs","pl":"Stworzone z Organicznych Owoc\\u00f3w & Zi\\u00f3\\u0142","jp":"Made with Organic Fruits & Herbs","ja":"Made with Organic Fruits & Herbs","es":"Made with Organic Fruits & Herbs","th":"Made with Organic Fruits & Herbs"}',
                'created_at' => '2017-05-10 18:28:38',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            13 => 
            array (
                'id' => 18,
                'product_id' => 3,
                'text' => '{"en":"Plant-Sourced Nutrition","pl":"Od\\u017cywianie Ro\\u015blinami","jp":"Plant-Sourced Nutrition","ja":"Plant-Sourced Nutrition","es":"Plant-Sourced Nutrition","th":"Plant-Sourced Nutrition"}',
                'created_at' => '2017-05-10 18:28:59',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            14 => 
            array (
                'id' => 19,
                'product_id' => 3,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 18:29:10',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            15 => 
            array (
                'id' => 20,
                'product_id' => 3,
                'text' => '{"en":"Protects Nutrients Inside","pl":"Chroni Sk\\u0142adniki Od\\u017cywcze w \\u015arodku","jp":"Protects Nutrients Inside","ja":"Protects Nutrients Inside","es":"Protects Nutrients Inside","th":"Protects Nutrients Inside"}',
                'created_at' => '2017-05-10 18:29:35',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            16 => 
            array (
                'id' => 21,
                'product_id' => 4,
                'text' => '{"en":"Made with Organic Fruits & Herbs","pl":"Made with Organic Fruits & Herbs","jp":"Made with Organic Fruits & Herbs","ja":"Made with Organic Fruits & Herbs","es":"Made with Organic Fruits & Herbs","th":"Made with Organic Fruits & Herbs"}',
                'created_at' => '2017-05-10 18:40:31',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            17 => 
            array (
                'id' => 22,
                'product_id' => 4,
                'text' => '{"en":"Plant-Sourced Nutrition","pl":"Plant-Sourced Nutrition","jp":"Plant-Sourced Nutrition","ja":"Plant-Sourced Nutrition","es":"Plant-Sourced Nutrition","th":"Plant-Sourced Nutrition"}',
                'created_at' => '2017-05-10 18:40:40',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            18 => 
            array (
                'id' => 23,
                'product_id' => 4,
                'text' => '{"en":"No GMO Ingredients","pl":"No GMO Ingredients","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 18:40:49',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            19 => 
            array (
                'id' => 24,
                'product_id' => 4,
                'text' => '{"en":"Protects Nutrients Inside","pl":"Protects Nutrients Inside","jp":"Protects Nutrients Inside","ja":"Protects Nutrients Inside","es":"Protects Nutrients Inside","th":"Protects Nutrients Inside"}',
                'created_at' => '2017-05-10 18:41:08',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            20 => 
            array (
                'id' => 25,
                'product_id' => 5,
                'text' => '{"en":"Made with Organic Fruits & Herbs","pl":"Stworzone z Organicznych Owoc\\u00f3w & Zi\\u00f3\\u0142","jp":"Made with Organic Fruits & Herbs","ja":"Made with Organic Fruits & Herbs","es":"Made with Organic Fruits & Herbs","th":"Made with Organic Fruits & Herbs"}',
                'created_at' => '2017-05-10 18:45:18',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            21 => 
            array (
                'id' => 26,
                'product_id' => 5,
                'text' => '{"en":"Plant-Sourced Nutrition","pl":"Od\\u017cywianie Ro\\u015blinami","jp":"Plant-Sourced Nutrition","ja":"Plant-Sourced Nutrition","es":"Plant-Sourced Nutrition","th":"Plant-Sourced Nutrition"}',
                'created_at' => '2017-05-10 18:45:27',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            22 => 
            array (
                'id' => 27,
                'product_id' => 5,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 18:45:40',
                'updated_at' => '2020-10-05 23:50:28',
                'order' => 1,
            ),
            23 => 
            array (
                'id' => 28,
                'product_id' => 5,
                'text' => '{"en":"Protects Nutrients Inside","pl":"Chroni Sk\\u0142adniki Od\\u017cywcze w \\u015arodku","jp":"Protects Nutrients Inside","ja":"Protects Nutrients Inside","es":"Protects Nutrients Inside","th":"Protects Nutrients Inside"}',
                'created_at' => '2017-05-10 18:45:53',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            24 => 
            array (
                'id' => 29,
                'product_id' => 6,
                'text' => '{"en":"Made with Organic Coconut & Herbs","pl":"Stworzone z Organicznych Kokos\\u00f3w & Zi\\u00f3\\u0142","jp":"Made with Organic Coconut & Herbs","ja":"Made with Organic Coconut & Herbs","es":"Made with Organic Coconut & Herbs","th":"Made with Organic Coconut & Herbs"}',
                'created_at' => '2017-05-10 19:02:36',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            25 => 
            array (
                'id' => 30,
                'product_id' => 6,
                'text' => '{"en":"Plant-Sourced Nutrition","pl":"Od\\u017cywianie Ro\\u015blinami","jp":"Plant-Sourced Nutrition","ja":"Plant-Sourced Nutrition","es":"Plant-Sourced Nutrition","th":"Plant-Sourced Nutrition"}',
                'created_at' => '2017-05-10 19:02:45',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            26 => 
            array (
                'id' => 31,
                'product_id' => 6,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 19:02:53',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            27 => 
            array (
                'id' => 32,
                'product_id' => 6,
                'text' => '{"en":"Protects Nutrients Inside","pl":"Chronione Szk\\u0142em Bursztynowym","jp":"Protects Nutrients Inside","ja":"Protects Nutrients Inside","es":"Protects Nutrients Inside","th":"Protects Nutrients Inside"}',
                'created_at' => '2017-05-10 19:03:01',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            28 => 
            array (
                'id' => 33,
                'product_id' => 7,
                'text' => '{"en":"Made with Organic Vegetables","pl":"Stworzone z Warzyw Organicznych","jp":"Made with Organic Vegetables","ja":"Made with Organic Vegetables","es":"Made with Organic Vegetables","th":"Made with Organic Vegetables"}',
                'created_at' => '2017-05-10 19:15:15',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            29 => 
            array (
                'id' => 34,
                'product_id' => 7,
                'text' => '{"en":"Plant-Sourced Nutrition","pl":"Od\\u017cywianie Ro\\u015blinami","jp":"Plant-Sourced Nutrition","ja":"Plant-Sourced Nutrition","es":"Plant-Sourced Nutrition","th":"Plant-Sourced Nutrition"}',
                'created_at' => '2017-05-10 19:15:22',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            30 => 
            array (
                'id' => 35,
                'product_id' => 7,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 19:15:33',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            31 => 
            array (
                'id' => 36,
                'product_id' => 7,
                'text' => '{"en":"Protects Nutrients Inside","pl":"Chroni Sk\\u0142adniki Od\\u017cywcze w \\u015arodku","jp":"Protects Nutrients Inside","ja":"Protects Nutrients Inside","es":"Protects Nutrients Inside","th":"Protects Nutrients Inside"}',
                'created_at' => '2017-05-10 19:15:49',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            32 => 
            array (
                'id' => 37,
                'product_id' => 8,
                'text' => '{"en":"100% Organic Green Tea","pl":"Organiczn\\u0105 zielon\\u0105 herbat\\u0105","jp":"100% Organic Green Tea","ja":"100% Organic Green Tea","es":"100% Organic Green Tea","th":"100% Organic Green Tea"}',
                'created_at' => '2017-05-10 19:41:17',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            33 => 
            array (
                'id' => 38,
                'product_id' => 8,
                'text' => '{"en":"Plant-Powered, Animal Friendly","pl":"Od\\u017cywianie Ro\\u015blinami","jp":"Plant-Powered, Animal Friendly","ja":"Plant-Powered, Animal Friendly","es":"Plant-Powered, Animal Friendly","th":"Plant-Powered, Animal Friendly"}',
                'created_at' => '2017-05-10 19:41:46',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            34 => 
            array (
                'id' => 39,
                'product_id' => 8,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 19:41:56',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            35 => 
            array (
                'id' => 40,
                'product_id' => 8,
                'text' => '{"en":"Protects Nutrients Inside","pl":"Chroni Sk\\u0142adniki Od\\u017cywcze w \\u015arodku","jp":"Protects Nutrients Inside","ja":"Protects Nutrients Inside","es":"Protects Nutrients Inside","th":"Protects Nutrients Inside"}',
                'created_at' => '2017-05-10 19:42:05',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            36 => 
            array (
                'id' => 41,
                'product_id' => 10,
                'text' => '{"en":"Advanced Cellular Cleanse","pl":"Zaawansowane Oczyszczanie Kom\\u00f3rkowe","jp":"Advanced Cellular Cleanse","ja":"\\u30a2\\u30c9\\u30d0\\u30f3\\u30b9\\u30c9\\u30bb\\u30eb\\u30e9\\u30fc\\u30af\\u30ec\\u30f3\\u30ba","es":"Limpieza celular avanzada","th":"Advanced Cellular Cleanse"}',
                'created_at' => '2017-05-10 19:52:29',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            37 => 
            array (
                'id' => 42,
                'product_id' => 10,
                'text' => '{"en":"Made with Organic Vegetables","pl":"Stworzone z Organicznych Warzyw","jp":"Made with Organic Vegetables","ja":"\\u30aa\\u30fc\\u30ac\\u30cb\\u30c3\\u30af\\u91ce\\u83dc\\u3092\\u4f7f\\u7528","es":"Hecho con vegetales org\\u00e1nicos","th":"Made with Organic Vegetables"}',
                'created_at' => '2017-05-10 19:52:38',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            38 => 
            array (
                'id' => 43,
                'product_id' => 10,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"GMO\\u7d20\\u6750\\u4e0d\\u4f7f\\u7528","es":"Sin ingredientes OGM","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 19:52:45',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            39 => 
            array (
                'id' => 44,
                'product_id' => 10,
                'text' => '{"en":"Protects Nutrients Inside","pl":"Chroni Sk\\u0142adniki Od\\u017cywcze w \\u015arodku","jp":"Protects Nutrients Inside","ja":"\\u5185\\u5074\\u306e\\u6804\\u990a\\u7d20\\u3092\\u4fdd\\u8b77","es":"Protege los nutrientes internos","th":"Protects Nutrients Inside"}',
                'created_at' => '2017-05-10 19:52:56',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            40 => 
            array (
                'id' => 45,
                'product_id' => 12,
                'text' => '{"en":"Detoxes Heavy Metals","pl":"Detoksykuje Metale Ci\\u0119\\u017ckie","jp":"Detoxes Heavy Metals","ja":"Detoxes Heavy Metals","es":"Detoxes Heavy Metals","th":"Detoxes Heavy Metals"}',
                'created_at' => '2017-05-10 20:03:19',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            41 => 
            array (
                'id' => 46,
                'product_id' => 12,
                'text' => '{"en":"Gut & Body Detox","pl":"Detoksykacja Organizmu & Trawienia","jp":"Body & Digestive Detox","ja":"Gut & Body Detox","es":"Gut & Body Detox","th":"Gut & Body Detox"}',
                'created_at' => '2017-05-10 20:03:27',
                'updated_at' => '2021-02-05 17:39:40',
                'order' => 1,
            ),
            42 => 
            array (
                'id' => 47,
                'product_id' => 12,
                'text' => '{"en":"Made with Organic Vegetables","pl":"Stworzone z Warzyw Organicznych","jp":"Made with Organic Vegetables","ja":"Made with Organic Vegetables","es":"Made with Organic Vegetables","th":"Made with Organic Vegetables"}',
                'created_at' => '2017-05-10 20:03:35',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            43 => 
            array (
                'id' => 48,
                'product_id' => 12,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 20:03:42',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            44 => 
            array (
                'id' => 49,
                'product_id' => 17,
                'text' => '{"en":"USDA Organic","pl":"Organiczne USDA","jp":"USDA Organic","ja":"USDA Organic","es":"USDA Organic","th":"USDA Organic"}',
                'created_at' => '2017-05-10 20:11:24',
                'updated_at' => '2021-03-04 22:19:40',
                'order' => 0,
            ),
            45 => 
            array (
                'id' => 50,
                'product_id' => 17,
                'text' => '{"en":"Plant-Sourced Nutrition","pl":"Od\\u017cywianie Ro\\u015blinami","jp":"Plant-Sourced Nutrition","ja":"Plant-Sourced Nutrition","es":"Plant-Sourced Nutrition","th":"Plant-Sourced Nutrition"}',
                'created_at' => '2017-05-10 20:11:40',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            46 => 
            array (
                'id' => 51,
                'product_id' => 17,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 20:11:50',
                'updated_at' => '2021-03-04 22:19:40',
                'order' => 2,
            ),
            47 => 
            array (
                'id' => 52,
                'product_id' => 17,
                'text' => '{"en":"QAI Certified Organic","pl":"Certyfikowane przez QAI Organiczne","jp":"QAI Certified Organic","ja":"QAI Certified Organic","es":"QAI Certified Organic","th":"QAI Certified Organic"}',
                'created_at' => '2017-05-10 20:12:43',
                'updated_at' => '2021-03-04 22:19:40',
                'order' => 3,
            ),
            48 => 
            array (
                'id' => 53,
                'product_id' => 9,
                'text' => '{"en":"Advanced Cellular Cleanse","pl":"Zaawansowane Oczyszczanie Kom\\u00f3rkowe","jp":"Advanced Cellular Cleanse","ja":"Advanced Cellular Cleanse","es":"Advanced Cellular Cleanse","th":"Advanced Cellular Cleanse"}',
                'created_at' => '2017-05-10 21:23:16',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            49 => 
            array (
                'id' => 54,
                'product_id' => 9,
                'text' => '{"en":"Made with Organic Fruits & Herbs","pl":"Stworzone z Organicznych Owoc\\u00f3w & Zi\\u00f3\\u0142","jp":"Made with Organic Fruits & Herbs","ja":"Made with Organic Fruits & Herbs","es":"Made with Organic Fruits & Herbs","th":"Made with Organic Fruits & Herbs"}',
                'created_at' => '2017-05-10 21:23:27',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            50 => 
            array (
                'id' => 55,
                'product_id' => 9,
                'text' => '{"en":"Plant-Powered, Animal Friendly","pl":"Od\\u017cywianie Ro\\u015blinami","jp":"Plant-Powered, Animal Friendly","ja":"Plant-Powered, Animal Friendly","es":"Plant-Powered, Animal Friendly","th":"Plant-Powered, Animal Friendly"}',
                'created_at' => '2017-05-10 21:23:34',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            51 => 
            array (
                'id' => 56,
                'product_id' => 9,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 21:23:45',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            52 => 
            array (
                'id' => 57,
                'product_id' => 13,
                'text' => '{"en":"Advanced Cellular Cleanse","pl":"Zaawansowane Oczyszczanie Kom\\u00f3rkowe","jp":"Advanced Cellular Cleanse","ja":"Advanced Cellular Cleanse","es":"Advanced Cellular Cleanse","th":"Advanced Cellular Cleanse"}',
                'created_at' => '2017-05-10 21:31:37',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            53 => 
            array (
                'id' => 58,
                'product_id' => 13,
                'text' => '{"en":"Made with Organic Fruits & Veggies","pl":"Stworzone z Warzyw Organicznych","jp":"Made with Organic Fruits & Veggies","ja":"Made with Organic Fruits & Veggies","es":"Made with Organic Fruits & Veggies","th":"Made with Organic Fruits & Veggies"}',
                'created_at' => '2017-05-10 21:31:47',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            54 => 
            array (
                'id' => 59,
                'product_id' => 13,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 21:31:55',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            55 => 
            array (
                'id' => 60,
                'product_id' => 13,
                'text' => '{"en":"Plant-Powered, Animal Friendly","pl":"Od\\u017cywianie Ro\\u015blinami","jp":"Plant-Powered, Animal Friendly","ja":"Plant-Powered, Animal Friendly","es":"Plant-Powered, Animal Friendly","th":"Plant-Powered, Animal Friendly"}',
                'created_at' => '2017-05-10 21:32:05',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            56 => 
            array (
                'id' => 61,
                'product_id' => 14,
                'text' => '{"en":"Detoxes Heavy Metals","pl":"Detoksykuje Metale Ci\\u0119\\u017ckie","jp":"Detoxes Heavy Metals","ja":"Detoxes Heavy Metals","es":"Detoxes Heavy Metals","th":"Detoxes Heavy Metals"}',
                'created_at' => '2017-05-10 21:37:01',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            57 => 
            array (
                'id' => 62,
                'product_id' => 14,
                'text' => '{"en":"Made with Organic Fruits & Veggies","pl":"Stworzone z Organicznych Warzyw","jp":"Made with Organic Fruits & Veggies","ja":"Made with Organic Fruits & Veggies","es":"Made with Organic Fruits & Veggies","th":"Made with Organic Fruits & Veggies"}',
                'created_at' => '2017-05-10 21:37:12',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            58 => 
            array (
                'id' => 63,
                'product_id' => 14,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 21:37:20',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            59 => 
            array (
                'id' => 64,
                'product_id' => 14,
                'text' => '{"en":"Plant-Powered, Animal Friendly","pl":"Od\\u017cywianie Ro\\u015blinami","jp":"Plant-Powered, Animal Friendly","ja":"Plant-Powered, Animal Friendly","es":"Plant-Powered, Animal Friendly","th":"Plant-Powered, Animal Friendly"}',
                'created_at' => '2017-05-10 21:38:02',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            60 => 
            array (
                'id' => 65,
                'product_id' => 18,
                'text' => '{"en":"USDA Organic","pl":"USDA Organic","jp":"USDA Organic","ja":"USDA Organic","es":"USDA Organic","th":"USDA Organic"}',
                'created_at' => '2017-05-10 21:45:19',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            61 => 
            array (
                'id' => 66,
                'product_id' => 18,
                'text' => '{"en":"Plant-Sourced Nutrition","pl":"Plant-Sourced Nutrition","jp":"Plant-Sourced Nutrition","ja":"Plant-Sourced Nutrition","es":"Plant-Sourced Nutrition","th":"Plant-Sourced Nutrition"}',
                'created_at' => '2017-05-10 21:45:27',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            62 => 
            array (
                'id' => 67,
                'product_id' => 18,
                'text' => '{"en":"No GMO Ingredients","pl":"No GMO Ingredients","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 21:45:36',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            63 => 
            array (
                'id' => 68,
                'product_id' => 18,
                'text' => '{"en":"QAI Certified Organic","pl":"QAI Certified Organic","jp":"QAI Certified Organic","ja":"QAI Certified Organic","es":"QAI Certified Organic","th":"QAI Certified Organic"}',
                'created_at' => '2017-05-10 21:45:44',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            64 => 
            array (
                'id' => 69,
                'product_id' => 19,
                'text' => '{"en":"USDA Organic","pl":"USDA Organic","jp":"USDA Organic","ja":"USDA Organic","es":"USDA Organic","th":"USDA Organic"}',
                'created_at' => '2017-05-10 21:52:01',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            65 => 
            array (
                'id' => 70,
                'product_id' => 19,
                'text' => '{"en":"Plant-Sourced Nutrition","pl":"Plant-Sourced Nutrition","jp":"Plant-Sourced Nutrition","ja":"Plant-Sourced Nutrition","es":"Plant-Sourced Nutrition","th":"Plant-Sourced Nutrition"}',
                'created_at' => '2017-05-10 21:52:15',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            66 => 
            array (
                'id' => 71,
                'product_id' => 19,
                'text' => '{"en":"No GMO Ingredients","pl":"No GMO Ingredients","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 21:52:26',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            67 => 
            array (
                'id' => 72,
                'product_id' => 19,
                'text' => '{"en":"QAI Certified Organic","pl":"QAI Certified Organic","jp":"QAI Certified Organic","ja":"QAI Certified Organic","es":"QAI Certified Organic","th":"QAI Certified Organic"}',
                'created_at' => '2017-05-10 21:52:32',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            68 => 
            array (
                'id' => 73,
                'product_id' => 20,
                'text' => '{"en":"USDA Organic","pl":"Organiczne USDA","jp":"USDA Organic","ja":"USDA Organic","es":"USDA Organic","th":"USDA Organic"}',
                'created_at' => '2017-05-10 22:05:05',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            69 => 
            array (
                'id' => 74,
                'product_id' => 20,
                'text' => '{"en":"Gluten Free","pl":"Bezglutenowa","jp":"Gluten Free","ja":"Gluten Free","es":"Gluten Free","th":"Gluten Free"}',
                'created_at' => '2017-05-10 22:05:27',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            70 => 
            array (
                'id' => 75,
                'product_id' => 20,
                'text' => '{"en":"Plant-Sourced Nutrition","pl":"Od\\u017cywianie Ro\\u015blinami","jp":"Plant-Sourced Nutrition","ja":"Plant-Sourced Nutrition","es":"Plant-Sourced Nutrition","th":"Plant-Sourced Nutrition"}',
                'created_at' => '2017-05-10 22:05:36',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            71 => 
            array (
                'id' => 76,
                'product_id' => 20,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 22:05:47',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            72 => 
            array (
                'id' => 77,
                'product_id' => 21,
                'text' => '{"en":"USDA Organic","pl":"USDA Organic","jp":"USDA Organic","ja":"USDA Organic","es":"USDA Organic","th":"USDA Organic"}',
                'created_at' => '2017-05-10 22:17:31',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            73 => 
            array (
                'id' => 78,
                'product_id' => 21,
                'text' => '{"en":"Gluten Free","pl":"Gluten Free","jp":"Gluten Free","ja":"Gluten Free","es":"Gluten Free","th":"Gluten Free"}',
                'created_at' => '2017-05-10 22:17:39',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            74 => 
            array (
                'id' => 79,
                'product_id' => 21,
                'text' => '{"en":"Plant-Sourced Nutrition","pl":"Plant-Sourced Nutrition","jp":"Plant-Sourced Nutrition","ja":"Plant-Sourced Nutrition","es":"Plant-Sourced Nutrition","th":"Plant-Sourced Nutrition"}',
                'created_at' => '2017-05-10 22:17:50',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            75 => 
            array (
                'id' => 80,
                'product_id' => 21,
                'text' => '{"en":"No GMO Ingredients","pl":"No GMO Ingredients","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 22:17:59',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            76 => 
            array (
                'id' => 81,
                'product_id' => 22,
                'text' => '{"en":"USDA Organic","pl":"USDA Organic","jp":"USDA Organic","ja":"USDA Organic","es":"USDA Organic","th":"USDA Organic"}',
                'created_at' => '2017-05-10 22:25:48',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            77 => 
            array (
                'id' => 82,
                'product_id' => 22,
                'text' => '{"en":"Gluten Free","pl":"Gluten Free","jp":"Gluten Free","ja":"Gluten Free","es":"Gluten Free","th":"Gluten Free"}',
                'created_at' => '2017-05-10 22:25:55',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            78 => 
            array (
                'id' => 83,
                'product_id' => 22,
                'text' => '{"en":"Plant-Sourced Nutrition","pl":"Plant-Sourced Nutrition","jp":"Plant-Sourced Nutrition","ja":"Plant-Sourced Nutrition","es":"Plant-Sourced Nutrition","th":"Plant-Sourced Nutrition"}',
                'created_at' => '2017-05-10 22:26:02',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            79 => 
            array (
                'id' => 84,
                'product_id' => 22,
                'text' => '{"en":"No GMO Ingredients","pl":"No GMO Ingredients","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 22:26:12',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            80 => 
            array (
                'id' => 85,
                'product_id' => 23,
                'text' => '{"en":"Made with Organic Coconut & Herbs","pl":"Made with Organic Coconut & Herbs","jp":"Made with Organic Coconut & Herbs","ja":"Made with Organic Coconut & Herbs","es":"Made with Organic Coconut & Herbs","th":"Made with Organic Coconut & Herbs"}',
                'created_at' => '2017-05-10 22:36:09',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            81 => 
            array (
                'id' => 86,
                'product_id' => 23,
                'text' => '{"en":"Plant-Sourced Nutrition","pl":"Plant-Sourced Nutrition","jp":"Plant-Sourced Nutrition","ja":"Plant-Sourced Nutrition","es":"Plant-Sourced Nutrition","th":"Plant-Sourced Nutrition"}',
                'created_at' => '2017-05-10 22:36:17',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            82 => 
            array (
                'id' => 87,
                'product_id' => 23,
                'text' => '{"en":"No GMO Ingredients","pl":"No GMO Ingredients","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 22:36:24',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            83 => 
            array (
                'id' => 88,
                'product_id' => 23,
                'text' => '{"en":"Protects Nutrients Inside","pl":"Protects Nutrients Inside","jp":"Protects Nutrients Inside","ja":"Protects Nutrients Inside","es":"Protects Nutrients Inside","th":"Protects Nutrients Inside"}',
                'created_at' => '2017-05-10 22:36:39',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            84 => 
            array (
                'id' => 89,
                'product_id' => 25,
                'text' => '{"en":"USDA Organic","pl":"Organiczne USDA","jp":"USDA Organic","ja":"USDA\\u30aa\\u30fc\\u30ac\\u30cb\\u30c3\\u30af","es":"USDA Org\\u00e1nico","th":"USDA Organic"}',
                'created_at' => '2017-05-10 22:41:52',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            85 => 
            array (
                'id' => 90,
                'product_id' => 25,
                'text' => '{"en":"Plant-Sourced Nutrition","pl":"Od\\u017cywianie Ro\\u015blinami","jp":"Plant-Sourced Nutrition","ja":"\\u690d\\u7269\\u7531\\u6765\\u306e\\u6804\\u990a\\u7d20","es":"Nutrici\\u00f3n de origen vegetal","th":"Plant-Sourced Nutrition"}',
                'created_at' => '2017-05-10 22:42:03',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            86 => 
            array (
                'id' => 91,
                'product_id' => 25,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"GMO\\u7d20\\u6750\\u4e0d\\u4f7f\\u7528","es":"Sin ingredientes OGM","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 22:42:11',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            87 => 
            array (
                'id' => 92,
                'product_id' => 25,
                'text' => '{"en":"Made with Organic Fruits & Herbs","pl":"Stworzone z Organicznych Owoc\\u00f3w & Zi\\u00f3\\u0142","jp":"Made with Organic Fruits & Herbs","ja":"\\u30aa\\u30fc\\u30ac\\u30cb\\u30c3\\u30af\\u679c\\u7269&\\u30cf\\u30fc\\u30d6\\u3092\\u4f7f\\u7528","es":"Hecho con frutas y hierbas org\\u00e1nicas","th":"Made with Organic Fruits & Herbs"}',
                'created_at' => '2017-05-10 22:42:19',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            88 => 
            array (
                'id' => 93,
                'product_id' => 24,
                'text' => '{"en":"USDA Organic","pl":"Organiczne USDA","jp":"USDA Organic","ja":"USDA Organic","es":"USDA Organic","th":"USDA Organic"}',
                'created_at' => '2017-05-10 22:50:40',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            89 => 
            array (
                'id' => 94,
                'product_id' => 24,
                'text' => '{"en":"Plant-Powered, Animal Friendly","pl":"Od\\u017cywianie Ro\\u015blinami","jp":"Plant-Powered, Animal Friendly","ja":"Plant-Powered, Animal Friendly","es":"Plant-Powered, Animal Friendly","th":"Plant-Powered, Animal Friendly"}',
                'created_at' => '2017-05-10 22:51:03',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            90 => 
            array (
                'id' => 95,
                'product_id' => 24,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-05-10 22:51:11',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            91 => 
            array (
                'id' => 96,
                'product_id' => 24,
                'text' => '{"en":"100% Organic Green Tea","pl":"Organiczn\\u0105 zielon\\u0105 herbat\\u0105","jp":"100% Organic Green Tea","ja":"100% Organic Green Tea","es":"100% Organic Green Tea","th":"100% Organic Green Tea"}',
                'created_at' => '2017-05-10 22:51:19',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            92 => 
            array (
                'id' => 97,
                'product_id' => 26,
                'text' => '{"en":"USDA Organic","pl":"Organiczne USDA","jp":"USDA Organic","ja":"USDA Organic","es":"USDA Organic","th":"USDA Organic"}',
                'created_at' => '2017-11-30 19:39:52',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            93 => 
            array (
                'id' => 98,
                'product_id' => 26,
                'text' => '{"en":"Plant Sourced Nutrition","pl":"Od\\u017cywianie Ro\\u015blinami","jp":"Plant Sourced Nutrition","ja":"Plant Sourced Nutrition","es":"Plant Sourced Nutrition","th":"Plant Sourced Nutrition"}',
                'created_at' => '2017-11-30 19:40:27',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            94 => 
            array (
                'id' => 99,
                'product_id' => 26,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","jp":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2017-11-30 19:40:50',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            95 => 
            array (
                'id' => 100,
                'product_id' => 26,
                'text' => '{"en":"QAI Certified Organic","pl":"Certyfikowane przez QAI Organiczne","jp":"QAI Certified Organic","ja":"QAI Certified Organic","es":"QAI Certified Organic","th":"QAI Certified Organic"}',
                'created_at' => '2017-11-30 19:41:19',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            96 => 
            array (
                'id' => 101,
                'product_id' => 27,
                'text' => '{"en":"Advanced Cellular Cleanse","pl":"Zaawansowane Oczyszczanie Kom\\u00f3rkowe","jp":"\\u30cf\\u30a4\\u30ec\\u30d9\\u30eb\\u306e\\u7d30\\u80de\\u6d17\\u6d44","ja":"\\u30cf\\u30a4\\u30ec\\u30d9\\u30eb\\u306e\\u7d30\\u80de\\u6d17\\u6d44","es":"Advanced Cellular Cleanse","th":"Advanced Cellular Cleanse"}',
                'created_at' => '2018-01-18 17:29:20',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            97 => 
            array (
                'id' => 102,
                'product_id' => 27,
                'text' => '{"en":"Detoxes Heavy Metals","pl":"Detoksykuje Metale Ci\\u0119\\u017ckie","jp":"\\u91cd\\u91d1\\u5c5e\\u3092\\u30c7\\u30c8\\u30c3\\u30af\\u30b9","ja":"\\u91cd\\u91d1\\u5c5e\\u3092\\u30c7\\u30c8\\u30c3\\u30af\\u30b9","es":"Detoxes Heavy Metals","th":"Detoxes Heavy Metals"}',
                'created_at' => '2018-01-18 17:29:29',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            98 => 
            array (
                'id' => 103,
                'product_id' => 27,
                'text' => '{"en":"Natural Mineral, Safe for All Ages","pl":"Naturalny Minera\\u0142","jp":"\\u5929\\u7136\\u30df\\u30cd\\u30e9\\u30eb\\u306a\\u306e\\u3067\\u3042\\u3089\\u3086\\u308b\\u5e74\\u9f62\\u306b\\u3068\\u3063\\u3066\\u5b89\\u5168","ja":"\\u5929\\u7136\\u30df\\u30cd\\u30e9\\u30eb\\u306a\\u306e\\u3067\\u3042\\u3089\\u3086\\u308b\\u5e74\\u9f62\\u306b\\u3068\\u3063\\u3066\\u5b89\\u5168","es":"Natural Mineral, Safe for All Ages","th":"Natural Mineral, Safe for All Ages"}',
                'created_at' => '2018-01-18 17:29:43',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            99 => 
            array (
                'id' => 104,
                'product_id' => 27,
                'text' => '{"en":"Lab Tested for Purity","pl":"Testowane Laboratoryjnie dla Czysto\\u015bci","jp":"\\u7814\\u7a76\\u6240\\u306b\\u3066\\u7d14\\u5ea6\\u3092\\u8a3c\\u660e\\u6e08\\u307f","ja":"\\u7814\\u7a76\\u6240\\u306b\\u3066\\u7d14\\u5ea6\\u3092\\u8a3c\\u660e\\u6e08\\u307f","es":"Lab Tested for Purity","th":"Lab Tested for Purity"}',
                'created_at' => '2018-01-18 17:29:51',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            100 => 
            array (
                'id' => 105,
                'product_id' => 28,
                'text' => '{"en":"Advanced Cellular Cleanse","pl":"Zaawansowane Oczyszczanie Kom\\u00f3rkowe","ja":"\\u30a2\\u30c9\\u30d0\\u30f3\\u30b9\\u30c9\\u30bb\\u30eb\\u30e9\\u30fc\\u30af\\u30ec\\u30f3\\u30ba","es":"Limpieza celular avanzada","th":"Advanced Cellular Cleanse"}',
                'created_at' => '2018-07-02 18:44:35',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            101 => 
            array (
                'id' => 106,
                'product_id' => 28,
                'text' => '{"en":"Made with Organic Fruits & Herbs","pl":"Stworzone z Organicznych Owoc\\u00f3w & Zi\\u00f3\\u0142","ja":"\\u30aa\\u30fc\\u30ac\\u30cb\\u30c3\\u30af\\u679c\\u7269&\\u30cf\\u30fc\\u30d6\\u3092\\u4f7f\\u7528","es":"Hecho con frutas y hierbas org\\u00e1nicas","th":"Made with Organic Fruits & Herbs"}',
                'created_at' => '2018-07-02 18:44:56',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            102 => 
            array (
                'id' => 107,
                'product_id' => 28,
                'text' => '{"en":"Plant-Powered, Animal Friendly","pl":"Od\\u017cywianie Ro\\u015blinami","ja":"\\u690d\\u7269\\u7531\\u6765\\u3001\\u52d5\\u7269\\u306b\\u512a\\u3057\\u3044","es":"Impulsa la siembra","th":"Plant-Powered, Animal Friendly"}',
                'created_at' => '2018-07-02 18:45:23',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            103 => 
            array (
                'id' => 108,
                'product_id' => 28,
                'text' => '{"en":"No GMO Ingredients","pl":"Brak Sk\\u0142adnik\\u00f3w GMO","ja":"GMO\\u7d20\\u6750\\u4e0d\\u4f7f\\u7528","es":"Sin ingredientes OGM","th":"No GMO Ingredients"}',
                'created_at' => '2018-07-02 18:45:47',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            104 => 
            array (
                'id' => 109,
                'product_id' => 29,
                'text' => '{"en":"Heavy Metal Detox","pl":"Detoksykuje Metale Ci\\u0119\\u017ckie","ja":"\\u91cd\\u91d1\\u5c5e\\u3092\\u30c7\\u30c8\\u30c3\\u30af\\u30b9","es":"Heavy Metal Detox","th":"Heavy Metal Detox"}',
                'created_at' => '2018-07-02 18:47:51',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            105 => 
            array (
                'id' => 110,
                'product_id' => 29,
                'text' => '{"en":"Lab Tested for Purity","pl":"Testowane Laboratoryjnie dla Czysto\\u015bci","ja":"\\u7814\\u7a76\\u6240\\u306b\\u3066\\u7d14\\u5ea6\\u306e\\u8a3c\\u660e\\u6e08\\u307f","es":"Lab Tested for Purity","th":"Lab Tested for Purity"}',
                'created_at' => '2018-07-02 18:48:20',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            106 => 
            array (
                'id' => 111,
                'product_id' => 29,
                'text' => '{"en":"Advanced Cellular Cleanse","pl":"Zaawansowane Oczyszczanie Kom\\u00f3rkowe","ja":"\\u30cf\\u30a4\\u30ec\\u30d9\\u30eb\\u306e\\u7d30\\u80de\\u6d17\\u6d44","es":"Advanced Cellular Cleanse","th":"Advanced Cellular Cleanse"}',
                'created_at' => '2018-07-02 18:48:48',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            107 => 
            array (
                'id' => 112,
                'product_id' => 29,
                'text' => '{"en":"Natural Mineral, Safe for All Ages","pl":"Naturalny Minera\\u0142","ja":"\\u5929\\u7136\\u30df\\u30cd\\u30e9\\u30eb\\u306a\\u306e\\u3067\\u3042\\u3089\\u3086\\u308b\\u5e74\\u9f62\\u306b\\u3068\\u3063\\u3066\\u5b89\\u5168","es":"Natural Mineral, Safe for All Ages","th":"Natural Mineral, Safe for All Ages"}',
                'created_at' => '2018-07-02 18:49:21',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            108 => 
            array (
                'id' => 113,
                'product_id' => 30,
                'text' => '{"en":"Broad Spectrum, Non-GMO","pl":"Broad Spectrum, Non-GMO","ja":"\\u30d5\\u30eb\\u30b9\\u30da\\u30af\\u30c8\\u30eb\\uff06\\u907a\\u4f1d\\u5b50\\u7d44\\u63db\\u3048\\u98df\\u54c1\\u4e0d\\u4f7f\\u7528","es":"Broad Spectrum, Non-GMO","th":"Broad Spectrum, Non-GMO"}',
                'created_at' => '2018-08-08 21:40:58',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            109 => 
            array (
                'id' => 114,
                'product_id' => 30,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"\\u6709\\u6a5f\\u683d\\u57f9CBD","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2018-08-09 19:11:35',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            110 => 
            array (
                'id' => 115,
                'product_id' => 30,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"\\u512a\\u308c\\u305f\\u5438\\u53ce\\u6027","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2018-08-09 19:24:52',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            111 => 
            array (
                'id' => 116,
                'product_id' => 30,
                'text' => '{"en":"Zero THC","pl":"Zero THC","ja":"THC\\u542b\\u6709\\u91cf\\u30bc\\u30ed","es":"Zero THC","th":"Zero THC"}',
                'created_at' => '2018-08-09 19:25:48',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            112 => 
            array (
                'id' => 117,
                'product_id' => 39,
                'text' => '{"en":"Broad Spectrum, Non-GMO","pl":"Broad Spectrum, Non-GMO","ja":"\\u30d5\\u30eb\\u30b9\\u30da\\u30af\\u30c8\\u30eb\\uff06\\u907a\\u4f1d\\u5b50\\u7d44\\u63db\\u3048\\u98df\\u54c1\\u4e0d\\u4f7f\\u7528","es":"Broad Spectrum, Non-GMO","th":"Broad Spectrum, Non-GMO"}',
                'created_at' => '2018-08-09 19:38:38',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            113 => 
            array (
                'id' => 118,
                'product_id' => 39,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"\\u6709\\u6a5f\\u683d\\u57f9CBD","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2018-08-09 19:39:19',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            114 => 
            array (
                'id' => 119,
                'product_id' => 39,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"\\u512a\\u308c\\u305f\\u5438\\u53ce\\u6027","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2018-08-09 19:39:42',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            115 => 
            array (
                'id' => 120,
                'product_id' => 39,
                'text' => '{"en":"Zero THC","pl":"Zero THC","ja":"THC\\u542b\\u6709\\u91cf\\u30bc\\u30ed","es":"Zero THC","th":"Zero THC"}',
                'created_at' => '2018-08-09 19:40:13',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            116 => 
            array (
                'id' => 121,
                'product_id' => 33,
                'text' => '{"en":"Broad Spectrum, Non-GMO","pl":"Broad Spectrum, Non-GMO","ja":"Broad Spectrum, Non-GMO","es":"Broad Spectrum, Non-GMO","th":"Broad Spectrum, Non-GMO"}',
                'created_at' => '2018-09-10 21:52:15',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            117 => 
            array (
                'id' => 122,
                'product_id' => 33,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"Organically Grown Hemp","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2018-09-10 21:52:46',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            118 => 
            array (
                'id' => 123,
                'product_id' => 33,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"Advanced Absorption","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2018-09-10 21:53:33',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            119 => 
            array (
                'id' => 124,
                'product_id' => 33,
                'text' => '{"en":"Zero THC","pl":"Zero THC","ja":"Zero THC","es":"Zero THC","th":"Zero THC"}',
                'created_at' => '2018-09-10 21:54:12',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            120 => 
            array (
                'id' => 125,
                'product_id' => 31,
                'text' => '{"en":"Broad Spectrum, Non-GMO","pl":"Broad Spectrum, Non-GMO","ja":"Broad Spectrum, Non-GMO","es":"Broad Spectrum, Non-GMO","th":"Broad Spectrum, Non-GMO"}',
                'created_at' => '2018-09-21 20:29:16',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            121 => 
            array (
                'id' => 126,
                'product_id' => 31,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"Organically Grown Hemp","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2018-09-21 20:30:01',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            122 => 
            array (
                'id' => 127,
                'product_id' => 31,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"Advanced Absorption","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2018-09-21 20:30:26',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            123 => 
            array (
                'id' => 128,
                'product_id' => 31,
                'text' => '{"en":"Zero THC","pl":"Zero THC","ja":"Zero THC","es":"Zero THC","th":"Zero THC"}',
                'created_at' => '2018-09-21 20:30:57',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            124 => 
            array (
                'id' => 129,
                'product_id' => 40,
                'text' => '{"en":"Broad Spectrum, Non-GMO","pl":"Broad Spectrum, Non-GMO","ja":"Broad Spectrum, Non-GMO","es":"Broad Spectrum, Non-GMO","th":"Broad Spectrum, Non-GMO"}',
                'created_at' => '2018-09-21 20:39:47',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            125 => 
            array (
                'id' => 130,
                'product_id' => 40,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"Organically Grown Hemp","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2018-09-21 20:40:10',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            126 => 
            array (
                'id' => 131,
                'product_id' => 40,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"Advanced Absorption","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2018-09-21 20:40:29',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            127 => 
            array (
                'id' => 132,
                'product_id' => 40,
                'text' => '{"en":"Zero THC","pl":"Zero THC","ja":"Zero THC","es":"Zero THC","th":"Zero THC"}',
                'created_at' => '2018-09-21 20:41:14',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            128 => 
            array (
                'id' => 133,
                'product_id' => 34,
                'text' => '{"en":"Broad Spectrum, Non-GMO","pl":"Broad Spectrum, Non-GMO","ja":"Broad Spectrum, Non-GMO","es":"Broad Spectrum, Non-GMO","th":"Broad Spectrum, Non-GMO"}',
                'created_at' => '2018-09-21 20:50:00',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            129 => 
            array (
                'id' => 134,
                'product_id' => 34,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"Organically Grown Hemp","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2018-09-21 20:50:26',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            130 => 
            array (
                'id' => 135,
                'product_id' => 34,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"Advanced Absorption","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2018-09-21 20:50:51',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            131 => 
            array (
                'id' => 136,
                'product_id' => 34,
                'text' => '{"en":"Zero THC","pl":"Zero THC","ja":"Zero THC","es":"Zero THC","th":"Zero THC"}',
                'created_at' => '2018-09-21 20:51:16',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            132 => 
            array (
                'id' => 137,
                'product_id' => 32,
                'text' => '{"en":"Broad Spectrum, Non-GMO","pl":"Broad Spectrum, Non-GMO","ja":"Broad Spectrum, Non-GMO","es":"Broad Spectrum, Non-GMO","th":"Broad Spectrum, Non-GMO"}',
                'created_at' => '2018-09-21 20:55:43',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            133 => 
            array (
                'id' => 138,
                'product_id' => 32,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"Organically Grown Hemp","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2018-09-21 20:56:10',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            134 => 
            array (
                'id' => 139,
                'product_id' => 32,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"Advanced Absorption","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2018-09-21 20:56:34',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            135 => 
            array (
                'id' => 140,
                'product_id' => 32,
                'text' => '{"en":"Zero THC","pl":"Zero THC","ja":"Zero THC","es":"Zero THC","th":"Zero THC"}',
                'created_at' => '2018-09-21 20:57:18',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            136 => 
            array (
                'id' => 141,
                'product_id' => 41,
                'text' => '{"en":"Broad Spectrum, Non-GMO","pl":"Broad Spectrum, Non-GMO","ja":"Broad Spectrum, Non-GMO","es":"Broad Spectrum, Non-GMO","th":"Broad Spectrum, Non-GMO"}',
                'created_at' => '2018-09-21 21:05:42',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            137 => 
            array (
                'id' => 142,
                'product_id' => 41,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"Organically Grown Hemp","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2018-09-21 21:06:09',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            138 => 
            array (
                'id' => 143,
                'product_id' => 41,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"Advanced Absorption","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2018-09-21 21:06:26',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            139 => 
            array (
                'id' => 144,
                'product_id' => 41,
                'text' => '{"en":"Zero THC","pl":"Zero THC","ja":"Zero THC","es":"Zero THC","th":"Zero THC"}',
                'created_at' => '2018-09-21 21:06:50',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            140 => 
            array (
                'id' => 145,
                'product_id' => 35,
                'text' => '{"en":"Broad Spectrum, Non-GMO","pl":"Broad Spectrum, Non-GMO","ja":"Broad Spectrum, Non-GMO","es":"Broad Spectrum, Non-GMO","th":"Broad Spectrum, Non-GMO"}',
                'created_at' => '2018-09-21 21:38:24',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            141 => 
            array (
                'id' => 146,
                'product_id' => 35,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"Organically Grown Hemp","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2018-09-21 21:38:49',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            142 => 
            array (
                'id' => 147,
                'product_id' => 35,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"Advanced Absorption","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2018-09-21 21:39:37',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            143 => 
            array (
                'id' => 148,
                'product_id' => 35,
                'text' => '{"en":"Zero THC","pl":"Zero THC","ja":"Zero THC","es":"Zero THC","th":"Zero THC"}',
                'created_at' => '2018-09-21 21:40:11',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            144 => 
            array (
                'id' => 149,
                'product_id' => 42,
                'text' => '{"en":"Advanced Cellular Detox","pl":"Advanced Cellular Detox","ja":"Advanced Cellular Detox","es":"Advanced Cellular Detox","th":"Advanced Cellular Detox"}',
                'created_at' => '2018-10-03 21:15:42',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            145 => 
            array (
                'id' => 151,
                'product_id' => 42,
                'text' => '{"en":"Made with Organic Superfoods","pl":"Made with Organic Superfoods","ja":"Made with Organic Superfoods","es":"Made with Organic Superfoods","th":"Made with Organic Superfoods"}',
                'created_at' => '2018-10-03 21:16:51',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            146 => 
            array (
                'id' => 152,
                'product_id' => 42,
                'text' => '{"en":"Plant-Powered, Animal Friendly","pl":"Plant-Powered, Animal Friendly","ja":"Plant-Powered, Animal Friendly","es":"Plant-Powered, Animal Friendly","th":"Plant-Powered, Animal Friendly"}',
                'created_at' => '2018-10-03 21:20:30',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            147 => 
            array (
                'id' => 153,
                'product_id' => 42,
                'text' => '{"en":"No GMO Ingredients","pl":"No GMO Ingredients","ja":"No GMO Ingredients","es":"No GMO Ingredients","th":"No GMO Ingredients"}',
                'created_at' => '2018-10-03 21:20:57',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            148 => 
            array (
                'id' => 154,
                'product_id' => 36,
                'text' => '{"en":"Full Spectrum, Non-GMO","pl":"Full Spectrum, Non-GMO","ja":"Full Spectrum, Non-GMO","es":"Full Spectrum, Non-GMO","th":"Full Spectrum, Non-GMO"}',
                'created_at' => '2018-12-13 22:24:26',
                'updated_at' => '2021-03-04 19:33:53',
                'order' => 0,
            ),
            149 => 
            array (
                'id' => 155,
                'product_id' => 36,
                'text' => '{"en":"USDA Organic","pl":"USDA Organic","ja":"USDA Organic","es":"USDA Organic","th":"USDA Organic"}',
                'created_at' => '2018-12-13 22:25:03',
                'updated_at' => '2021-03-04 22:20:34',
                'order' => 1,
            ),
            150 => 
            array (
                'id' => 156,
                'product_id' => 36,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"Advanced Absorption","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2018-12-13 22:25:28',
                'updated_at' => '2021-03-04 19:33:53',
                'order' => 2,
            ),
            151 => 
            array (
                'id' => 157,
                'product_id' => 36,
                'text' => '{"en":"THC Compliant","pl":"THC Compliant","ja":"THC Compliant","es":"THC Compliant","th":"THC Compliant"}',
                'created_at' => '2018-12-13 22:26:00',
                'updated_at' => '2021-03-04 19:33:53',
                'order' => 3,
            ),
            152 => 
            array (
                'id' => 158,
                'product_id' => 37,
                'text' => '{"en":"Full Spectrum, Non-GMO","pl":"Full Spectrum, Non-GMO","ja":"Full Spectrum, Non-GMO","es":"Full Spectrum, Non-GMO","th":"Full Spectrum, Non-GMO"}',
                'created_at' => '2018-12-13 22:29:55',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            153 => 
            array (
                'id' => 159,
                'product_id' => 37,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"Organically Grown Hemp","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2018-12-13 22:30:22',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            154 => 
            array (
                'id' => 160,
                'product_id' => 37,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"Advanced Absorption","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2018-12-13 22:30:39',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            155 => 
            array (
                'id' => 161,
                'product_id' => 37,
                'text' => '{"en":"THC Compliant","pl":"THC Compliant","ja":"THC Compliant","es":"THC Compliant","th":"THC Compliant"}',
                'created_at' => '2018-12-13 22:31:19',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            156 => 
            array (
                'id' => 162,
                'product_id' => 38,
                'text' => '{"en":"Full Spectrum, Non-GMO","pl":"Full Spectrum, Non-GMO","ja":"Full Spectrum, Non-GMO","es":"Full Spectrum, Non-GMO","th":"Full Spectrum, Non-GMO"}',
                'created_at' => '2018-12-13 22:48:22',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            157 => 
            array (
                'id' => 163,
                'product_id' => 38,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"Organically Grown Hemp","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2018-12-13 22:48:49',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            158 => 
            array (
                'id' => 164,
                'product_id' => 38,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"Advanced Absorption","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2018-12-13 22:49:07',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            159 => 
            array (
                'id' => 165,
                'product_id' => 38,
                'text' => '{"en":"THC Compliant","pl":"THC Compliant","ja":"THC Compliant","es":"THC Compliant","th":"THC Compliant"}',
                'created_at' => '2018-12-13 22:49:38',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            160 => 
            array (
                'id' => 166,
                'product_id' => 43,
                'text' => '{"en":"Advanced Cellular Cleanse","pl":"Zaawansowane Oczyszczanie Kom\\u00f3rkowe","ja":"\\u30cf\\u30a4\\u30ec\\u30d9\\u30eb\\u306e\\u7d30\\u80de\\u6d17\\u6d44","es":"Advanced Cellular Cleanse","th":"Advanced Cellular Cleanse"}',
                'created_at' => '2019-06-25 23:00:08',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            161 => 
            array (
                'id' => 167,
                'product_id' => 43,
                'text' => '{"en":"Detoxes Heavy Metals","pl":"Detoksykuje Metale Ci\\u0119\\u017ckie","ja":"\\u30d5\\u30eb\\u30b9\\u30da\\u30af\\u30c8\\u30eb\\uff06\\u907a\\u4f1d\\u5b50\\u7d44\\u63db\\u3048\\u98df\\u54c1\\u4e0d\\u4f7f\\u7528","es":"Detoxes Heavy Metals","th":"Detoxes Heavy Metals"}',
                'created_at' => '2019-06-25 23:01:12',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            162 => 
            array (
                'id' => 168,
                'product_id' => 43,
                'text' => '{"en":"Natural Mineral, Safe for All Ages","pl":"Naturalny Minera\\u0142","ja":"\\u5929\\u7136\\u30df\\u30cd\\u30e9\\u30eb\\u306a\\u306e\\u3067\\u3042\\u3089\\u3086\\u308b\\u5e74\\u9f62\\u306b\\u3068\\u3063\\u3066\\u5b89\\u5168","es":"Natural Mineral, Safe for All Ages","th":"Natural Mineral, Safe for All Ages"}',
                'created_at' => '2019-06-25 23:02:18',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            163 => 
            array (
                'id' => 169,
                'product_id' => 43,
                'text' => '{"en":"Lab Tested for Purity","pl":"Testowane Laboratoryjnie dla Czysto\\u015bci","ja":"\\u7814\\u7a76\\u6240\\u306b\\u3066\\u7d14\\u5ea6\\u3092\\u8a3c\\u660e\\u6e08\\u307f","es":"Lab Tested for Purity","th":"Lab Tested for Purity"}',
                'created_at' => '2019-06-25 23:03:22',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            164 => 
            array (
                'id' => 170,
                'product_id' => 44,
                'text' => '{"en":"Advanced Cellular Cleanse","pl":"Zaawansowane Oczyszczanie Kom\\u00f3rkowe","ja":"\\u30cf\\u30a4\\u30ec\\u30d9\\u30eb\\u306e\\u7d30\\u80de\\u6d17\\u6d44","es":"Advanced Cellular Cleanse","th":"Advanced Cellular Cleanse"}',
                'created_at' => '2019-06-25 23:37:28',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            165 => 
            array (
                'id' => 171,
                'product_id' => 44,
                'text' => '{"en":"Detoxes Heavy Metals","pl":"Detoksykuje Metale Ci\\u0119\\u017ckie","ja":"\\u30d5\\u30eb\\u30b9\\u30da\\u30af\\u30c8\\u30eb\\uff06\\u907a\\u4f1d\\u5b50\\u7d44\\u63db\\u3048\\u98df\\u54c1\\u4e0d\\u4f7f\\u7528","es":"Detoxes Heavy Metals","th":"Detoxes Heavy Metals"}',
                'created_at' => '2019-06-25 23:38:14',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            166 => 
            array (
                'id' => 172,
                'product_id' => 44,
                'text' => '{"en":"Natural Mineral, Safe for All Ages","pl":"Naturalny Minera\\u0142","ja":"\\u5929\\u7136\\u30df\\u30cd\\u30e9\\u30eb\\u306a\\u306e\\u3067\\u3042\\u3089\\u3086\\u308b\\u5e74\\u9f62\\u306b\\u3068\\u3063\\u3066\\u5b89\\u5168","es":"Natural Mineral, Safe for All Ages","th":"Natural Mineral, Safe for All Ages"}',
                'created_at' => '2019-06-25 23:38:59',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            167 => 
            array (
                'id' => 173,
                'product_id' => 44,
                'text' => '{"en":"Lab Tested for Purity","pl":"Testowane Laboratoryjnie dla Czysto\\u015bci","ja":"\\u7814\\u7a76\\u6240\\u306b\\u3066\\u7d14\\u5ea6\\u3092\\u8a3c\\u660e\\u6e08\\u307f","es":"Lab Tested for Purity","th":"Lab Tested for Purity"}',
                'created_at' => '2019-06-25 23:40:00',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            168 => 
            array (
                'id' => 174,
                'product_id' => 45,
                'text' => '{"en":"Broad Spectrum, Non-GMO","pl":"Broad Spectrum, Non-GMO","ja":"\\u30d5\\u30eb\\u30b9\\u30da\\u30af\\u30c8\\u30eb\\uff06\\u907a\\u4f1d\\u5b50\\u7d44\\u63db\\u3048\\u98df\\u54c1\\u4e0d\\u4f7f\\u7528","es":"Broad Spectrum, Non-GMO","th":"Broad Spectrum, Non-GMO"}',
                'created_at' => '2019-07-02 13:32:17',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            169 => 
            array (
                'id' => 175,
                'product_id' => 45,
                'text' => '{"en":"USDA Organic","pl":"USDA Organic","ja":"\\u6709\\u6a5f\\u683d\\u57f9CBD","es":"USDA Organic","th":"USDA Organic"}',
                'created_at' => '2019-07-02 13:33:09',
                'updated_at' => '2021-03-04 22:22:19',
                'order' => 2,
            ),
            170 => 
            array (
                'id' => 176,
                'product_id' => 45,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"\\u512a\\u308c\\u305f\\u5438\\u53ce\\u6027","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2019-07-02 13:33:44',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 3,
            ),
            171 => 
            array (
                'id' => 177,
                'product_id' => 45,
                'text' => '{"en":"Zero THC","pl":"Zero THC","ja":"THC\\u542b\\u6709\\u91cf\\u30bc\\u30ed","es":"Zero THC","th":"Zero THC"}',
                'created_at' => '2019-07-02 13:34:26',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 4,
            ),
            172 => 
            array (
                'id' => 178,
                'product_id' => 48,
                'text' => '{"en":"Full Spectrum, Non-GMO","pl":"Full Spectrum, Non-GMO","ja":"\\u30d5\\u30eb\\u30b9\\u30da\\u30af\\u30c8\\u30eb\\uff06\\u907a\\u4f1d\\u5b50\\u7d44\\u63db\\u3048\\u98df\\u54c1\\u4e0d\\u4f7f\\u7528","es":"Full Spectrum, Non-GMO","th":"Full Spectrum, Non-GMO"}',
                'created_at' => '2019-07-02 15:30:15',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            173 => 
            array (
                'id' => 179,
                'product_id' => 48,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"\\u6709\\u6a5f\\u683d\\u57f9CBD","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2019-07-02 15:31:03',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 2,
            ),
            174 => 
            array (
                'id' => 180,
                'product_id' => 48,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"\\u512a\\u308c\\u305f\\u5438\\u53ce\\u6027","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2019-07-02 15:31:34',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 3,
            ),
            175 => 
            array (
                'id' => 181,
                'product_id' => 48,
                'text' => '{"en":"Zero THC","pl":"Zero THC","ja":"THC\\u542b\\u6709\\u91cf\\u30bc\\u30ed","es":"Zero THC","th":"Zero THC"}',
                'created_at' => '2019-07-02 15:34:02',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 4,
            ),
            176 => 
            array (
                'id' => 182,
                'product_id' => 49,
                'text' => '{"en":"Full Spectrum, Non-GMO","pl":"Full Spectrum, Non-GMO","ja":"\\u30d5\\u30eb\\u30b9\\u30da\\u30af\\u30c8\\u30eb\\uff06\\u907a\\u4f1d\\u5b50\\u7d44\\u63db\\u3048\\u98df\\u54c1\\u4e0d\\u4f7f\\u7528","es":"Full Spectrum, Non-GMO","th":"Full Spectrum, Non-GMO"}',
                'created_at' => '2019-07-02 18:31:58',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            177 => 
            array (
                'id' => 183,
                'product_id' => 49,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"\\u6709\\u6a5f\\u683d\\u57f9CBD","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2019-07-02 18:32:37',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 2,
            ),
            178 => 
            array (
                'id' => 184,
                'product_id' => 49,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"\\u512a\\u308c\\u305f\\u5438\\u53ce\\u6027","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2019-07-02 18:33:04',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 3,
            ),
            179 => 
            array (
                'id' => 185,
                'product_id' => 49,
                'text' => '{"en":"Zero THC","pl":"Zero THC","ja":"THC\\u542b\\u6709\\u91cf\\u30bc\\u30ed","es":"Zero THC","th":"Zero THC"}',
                'created_at' => '2019-07-02 18:33:46',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 4,
            ),
            180 => 
            array (
                'id' => 186,
                'product_id' => 46,
                'text' => '{"en":"Broad Spectrum, Non-GMO","pl":"Broad Spectrum, Non-GMO","ja":"\\u30d5\\u30eb\\u30b9\\u30da\\u30af\\u30c8\\u30eb\\uff06\\u907a\\u4f1d\\u5b50\\u7d44\\u63db\\u3048\\u98df\\u54c1\\u4e0d\\u4f7f\\u7528","es":"Broad Spectrum, Non-GMO","th":"Broad Spectrum, Non-GMO"}',
                'created_at' => '2019-07-02 19:09:42',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            181 => 
            array (
                'id' => 187,
                'product_id' => 46,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"\\u6709\\u6a5f\\u683d\\u57f9CBD","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2019-07-02 19:10:25',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 2,
            ),
            182 => 
            array (
                'id' => 188,
                'product_id' => 46,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"\\u512a\\u308c\\u305f\\u5438\\u53ce\\u6027","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2019-07-02 19:11:10',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 3,
            ),
            183 => 
            array (
                'id' => 189,
                'product_id' => 46,
                'text' => '{"en":"Zero THC","pl":"Zero THC","ja":"THC\\u542b\\u6709\\u91cf\\u30bc\\u30ed","es":"Zero THC","th":"Zero THC"}',
                'created_at' => '2019-07-02 19:11:49',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 4,
            ),
            184 => 
            array (
                'id' => 190,
                'product_id' => 47,
                'text' => '{"en":"Broad Spectrum, Non-GMO","pl":"Broad Spectrum, Non-GMO","ja":"\\u30d5\\u30eb\\u30b9\\u30da\\u30af\\u30c8\\u30eb\\uff06\\u907a\\u4f1d\\u5b50\\u7d44\\u63db\\u3048\\u98df\\u54c1\\u4e0d\\u4f7f\\u7528","es":"Broad Spectrum, Non-GMO","th":"Broad Spectrum, Non-GMO"}',
                'created_at' => '2019-07-02 19:25:51',
                'updated_at' => '2020-10-05 23:50:29',
                'order' => 1,
            ),
            185 => 
            array (
                'id' => 191,
                'product_id' => 47,
                'text' => '{"en":"Organically Grown Hemp","pl":"Organically Grown Hemp","ja":"\\u6709\\u6a5f\\u683d\\u57f9CBD","es":"Organically Grown Hemp","th":"Organically Grown Hemp"}',
                'created_at' => '2019-07-02 19:28:08',
                'updated_at' => '2020-10-05 23:50:30',
                'order' => 2,
            ),
            186 => 
            array (
                'id' => 192,
                'product_id' => 47,
                'text' => '{"en":"Advanced Absorption","pl":"Advanced Absorption","ja":"\\u512a\\u308c\\u305f\\u5438\\u53ce\\u6027","es":"Advanced Absorption","th":"Advanced Absorption"}',
                'created_at' => '2019-07-02 19:28:52',
                'updated_at' => '2020-10-05 23:50:30',
                'order' => 3,
            ),
            187 => 
            array (
                'id' => 193,
                'product_id' => 47,
                'text' => '{"en":"Zero THC","pl":"Zero THC","ja":"THC\\u542b\\u6709\\u91cf\\u30bc\\u30ed","es":"Zero THC","th":"Zero THC"}',
                'created_at' => '2019-07-02 19:29:28',
                'updated_at' => '2020-10-05 23:50:30',
                'order' => 4,
            ),
            188 => 
            array (
                'id' => 194,
                'product_id' => 59,
                'text' => '{"en":"Advanced Cellular Cleanse","pl":"Zaawansowane Oczyszczanie Kom\\u00f3rkowe","ja":"\\u30cf\\u30a4\\u30ec\\u30d9\\u30eb\\u306e\\u7d30\\u80de\\u6d17\\u6d44","es":"Advanced Cellular Cleanse","th":"Advanced Cellular Cleanse"}',
                'created_at' => '2019-12-29 20:49:23',
                'updated_at' => '2020-10-05 23:50:30',
                'order' => 1,
            ),
            189 => 
            array (
                'id' => 195,
                'product_id' => 59,
                'text' => '{"en":"Gut & Body Detox","pl":"Detoksykacja Organizmu & Trawienia","ja":"\\u8eab\\u4f53\\u3068\\u6d88\\u5316\\u5668\\u5b98\\u306e\\u304a\\u6383\\u9664","es":"Gut & Body Detox","th":"Gut & Body Detox"}',
                'created_at' => '2019-12-29 20:52:38',
                'updated_at' => '2021-02-05 17:42:02',
                'order' => 2,
            ),
            190 => 
            array (
                'id' => 196,
                'product_id' => 59,
                'text' => '{"en":"Detoxes Heavy Metals","pl":"Detoksykuje Metale Ci\\u0119\\u017ckie","ja":"\\u91cd\\u91d1\\u5c5e\\u3092\\u30c7\\u30c8\\u30c3\\u30af\\u30b9","es":"Detoxes Heavy Metals","th":"Detoxes Heavy Metals"}',
                'created_at' => '2019-12-29 20:53:51',
                'updated_at' => '2020-10-05 23:50:30',
                'order' => 3,
            ),
            191 => 
            array (
                'id' => 197,
                'product_id' => 59,
                'text' => '{"en":"Lab Tested for Purity","pl":"Testowane Laboratoryjnie dla Czysto\\u015bci","ja":"\\u7814\\u7a76\\u6240\\u306b\\u3066\\u7d14\\u5ea6\\u3092\\u8a3c\\u660e\\u6e08\\u307f","es":"Lab Tested for Purity","th":"Lab Tested for Purity"}',
                'created_at' => '2019-12-29 20:54:39',
                'updated_at' => '2020-10-05 23:50:30',
                'order' => 4,
            ),
            192 => 
            array (
                'id' => 198,
                'product_id' => 60,
                'text' => '{"en":"Advanced Cellular Cleanse","pl":"Zaawansowane Oczyszczanie Kom\\u00f3rkowe","ja":"\\u30cf\\u30a4\\u30ec\\u30d9\\u30eb\\u306e\\u7d30\\u80de\\u6d17\\u6d44","es":"Advanced Cellular Cleanse","th":"Advanced Cellular Cleanse"}',
                'created_at' => '2020-01-30 23:02:16',
                'updated_at' => '2020-10-05 23:50:30',
                'order' => 1,
            ),
            193 => 
            array (
                'id' => 199,
                'product_id' => 60,
                'text' => '{"en":"Gut & Body Detox","pl":"Detoksykacja Organizmu & Trawienia","ja":"\\u8eab\\u4f53\\u3068\\u6d88\\u5316\\u5668\\u5b98\\u306e\\u304a\\u6383\\u9664","es":"Gut & Body Detox","th":"Gut & Body Detox"}',
                'created_at' => '2020-01-30 23:03:17',
                'updated_at' => '2021-02-05 17:44:33',
                'order' => 2,
            ),
            194 => 
            array (
                'id' => 200,
                'product_id' => 60,
                'text' => '{"en":"Detoxes Heavy Metals","pl":"Detoksykuje Metale Ci\\u0119\\u017ckie","ja":"\\u91cd\\u91d1\\u5c5e\\u3092\\u30c7\\u30c8\\u30c3\\u30af\\u30b9","es":"Detoxes Heavy Metals","th":"Detoxes Heavy Metals"}',
                'created_at' => '2020-01-30 23:03:58',
                'updated_at' => '2020-10-05 23:50:30',
                'order' => 3,
            ),
            195 => 
            array (
                'id' => 201,
                'product_id' => 60,
                'text' => '{"en":"Lab Tested for Purity","pl":"Testowane Laboratoryjnie dla Czysto\\u015bci","ja":"\\u7814\\u7a76\\u6240\\u306b\\u3066\\u7d14\\u5ea6\\u3092\\u8a3c\\u660e\\u6e08\\u307f","es":"Lab Tested for Purity","th":"Lab Tested for Purity"}',
                'created_at' => '2020-01-30 23:04:42',
                'updated_at' => '2020-10-05 23:50:30',
                'order' => 4,
            ),
            196 => 
            array (
                'id' => 202,
                'product_id' => 61,
                'text' => '{"en":"Advanced Cellular Cleanse","pl":"Zaawansowane Oczyszczanie Kom\\u00f3rkowe","ja":"\\u30cf\\u30a4\\u30ec\\u30d9\\u30eb\\u306e\\u7d30\\u80de\\u6d17\\u6d44","es":"Advanced Cellular Cleanse","th":"Advanced Cellular Cleanse"}',
                'created_at' => '2020-01-31 00:02:25',
                'updated_at' => '2020-10-05 23:50:30',
                'order' => 0,
            ),
            197 => 
            array (
                'id' => 203,
                'product_id' => 61,
                'text' => '{"en":"Gut & Body Detox","pl":"Detoksykacja Organizmu & Trawienia","ja":"\\u8eab\\u4f53\\u3068\\u6d88\\u5316\\u5668\\u5b98\\u306e\\u304a\\u6383\\u9664","es":"Gut & Body Detox","th":"Gut & Body Detox"}',
                'created_at' => '2020-01-31 00:03:13',
                'updated_at' => '2021-02-05 17:45:09',
                'order' => 1,
            ),
            198 => 
            array (
                'id' => 204,
                'product_id' => 61,
                'text' => '{"en":"Detoxes Heavy Metals","pl":"Detoksykuje Metale Ci\\u0119\\u017ckie","ja":"\\u91cd\\u91d1\\u5c5e\\u3092\\u30c7\\u30c8\\u30c3\\u30af\\u30b9","es":"Detoxes Heavy Metals","th":"Detoxes Heavy Metals"}',
                'created_at' => '2020-01-31 00:03:57',
                'updated_at' => '2020-10-05 23:50:30',
                'order' => 2,
            ),
            199 => 
            array (
                'id' => 205,
                'product_id' => 61,
                'text' => '{"en":"Lab Tested for Purity","pl":"Testowane Laboratoryjnie dla Czysto\\u015bci","ja":"\\u7814\\u7a76\\u6240\\u306b\\u3066\\u7d14\\u5ea6\\u3092\\u8a3c\\u660e\\u6e08\\u307f","es":"Lab Tested for Purity","th":"Lab Tested for Purity"}',
                'created_at' => '2020-01-31 00:04:33',
                'updated_at' => '2020-10-05 23:50:30',
                'order' => 3,
            ),
        ));
        
        
    }
}