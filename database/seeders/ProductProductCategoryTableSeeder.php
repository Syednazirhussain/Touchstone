<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductProductCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_product_category')->delete();
        
        \DB::table('product_product_category')->insert(array (
            0 => 
            array (
                'product_id' => 1,
                'category_id' => 1,
            ),
            1 => 
            array (
                'product_id' => 2,
                'category_id' => 1,
            ),
            2 => 
            array (
                'product_id' => 17,
                'category_id' => 5,
            ),
            3 => 
            array (
                'product_id' => 6,
                'category_id' => 5,
            ),
            4 => 
            array (
                'product_id' => 5,
                'category_id' => 5,
            ),
            5 => 
            array (
                'product_id' => 8,
                'category_id' => 5,
            ),
            6 => 
            array (
                'product_id' => 20,
                'category_id' => 5,
            ),
            7 => 
            array (
                'product_id' => 7,
                'category_id' => 5,
            ),
            8 => 
            array (
                'product_id' => 16,
                'category_id' => 1,
            ),
            9 => 
            array (
                'product_id' => 10,
                'category_id' => 1,
            ),
            10 => 
            array (
                'product_id' => 12,
                'category_id' => 1,
            ),
            11 => 
            array (
                'product_id' => 1,
                'category_id' => 8,
            ),
            12 => 
            array (
                'product_id' => 1,
                'category_id' => 9,
            ),
            13 => 
            array (
                'product_id' => 1,
                'category_id' => 20,
            ),
            14 => 
            array (
                'product_id' => 2,
                'category_id' => 8,
            ),
            15 => 
            array (
                'product_id' => 2,
                'category_id' => 9,
            ),
            16 => 
            array (
                'product_id' => 2,
                'category_id' => 20,
            ),
            17 => 
            array (
                'product_id' => 3,
                'category_id' => 8,
            ),
            18 => 
            array (
                'product_id' => 3,
                'category_id' => 12,
            ),
            19 => 
            array (
                'product_id' => 3,
                'category_id' => 15,
            ),
            20 => 
            array (
                'product_id' => 3,
                'category_id' => 17,
            ),
            21 => 
            array (
                'product_id' => 3,
                'category_id' => 18,
            ),
            22 => 
            array (
                'product_id' => 4,
                'category_id' => 8,
            ),
            23 => 
            array (
                'product_id' => 4,
                'category_id' => 12,
            ),
            24 => 
            array (
                'product_id' => 4,
                'category_id' => 15,
            ),
            25 => 
            array (
                'product_id' => 5,
                'category_id' => 8,
            ),
            26 => 
            array (
                'product_id' => 5,
                'category_id' => 17,
            ),
            27 => 
            array (
                'product_id' => 5,
                'category_id' => 18,
            ),
            28 => 
            array (
                'product_id' => 6,
                'category_id' => 8,
            ),
            29 => 
            array (
                'product_id' => 6,
                'category_id' => 9,
            ),
            30 => 
            array (
                'product_id' => 6,
                'category_id' => 13,
            ),
            31 => 
            array (
                'product_id' => 6,
                'category_id' => 14,
            ),
            32 => 
            array (
                'product_id' => 6,
                'category_id' => 18,
            ),
            33 => 
            array (
                'product_id' => 7,
                'category_id' => 8,
            ),
            34 => 
            array (
                'product_id' => 7,
                'category_id' => 9,
            ),
            35 => 
            array (
                'product_id' => 7,
                'category_id' => 11,
            ),
            36 => 
            array (
                'product_id' => 7,
                'category_id' => 17,
            ),
            37 => 
            array (
                'product_id' => 7,
                'category_id' => 18,
            ),
            38 => 
            array (
                'product_id' => 7,
                'category_id' => 19,
            ),
            39 => 
            array (
                'product_id' => 8,
                'category_id' => 8,
            ),
            40 => 
            array (
                'product_id' => 8,
                'category_id' => 12,
            ),
            41 => 
            array (
                'product_id' => 8,
                'category_id' => 14,
            ),
            42 => 
            array (
                'product_id' => 8,
                'category_id' => 17,
            ),
            43 => 
            array (
                'product_id' => 9,
                'category_id' => 5,
            ),
            44 => 
            array (
                'product_id' => 9,
                'category_id' => 8,
            ),
            45 => 
            array (
                'product_id' => 10,
                'category_id' => 8,
            ),
            46 => 
            array (
                'product_id' => 10,
                'category_id' => 19,
            ),
            47 => 
            array (
                'product_id' => 10,
                'category_id' => 20,
            ),
            48 => 
            array (
                'product_id' => 12,
                'category_id' => 8,
            ),
            49 => 
            array (
                'product_id' => 12,
                'category_id' => 19,
            ),
            50 => 
            array (
                'product_id' => 12,
                'category_id' => 20,
            ),
            51 => 
            array (
                'product_id' => 13,
                'category_id' => 5,
            ),
            52 => 
            array (
                'product_id' => 13,
                'category_id' => 8,
            ),
            53 => 
            array (
                'product_id' => 13,
                'category_id' => 17,
            ),
            54 => 
            array (
                'product_id' => 13,
                'category_id' => 19,
            ),
            55 => 
            array (
                'product_id' => 14,
                'category_id' => 5,
            ),
            56 => 
            array (
                'product_id' => 14,
                'category_id' => 8,
            ),
            57 => 
            array (
                'product_id' => 14,
                'category_id' => 17,
            ),
            58 => 
            array (
                'product_id' => 14,
                'category_id' => 19,
            ),
            59 => 
            array (
                'product_id' => 16,
                'category_id' => 8,
            ),
            60 => 
            array (
                'product_id' => 16,
                'category_id' => 11,
            ),
            61 => 
            array (
                'product_id' => 16,
                'category_id' => 20,
            ),
            62 => 
            array (
                'product_id' => 17,
                'category_id' => 8,
            ),
            63 => 
            array (
                'product_id' => 17,
                'category_id' => 9,
            ),
            64 => 
            array (
                'product_id' => 17,
                'category_id' => 11,
            ),
            65 => 
            array (
                'product_id' => 17,
                'category_id' => 12,
            ),
            66 => 
            array (
                'product_id' => 17,
                'category_id' => 13,
            ),
            67 => 
            array (
                'product_id' => 17,
                'category_id' => 15,
            ),
            68 => 
            array (
                'product_id' => 17,
                'category_id' => 17,
            ),
            69 => 
            array (
                'product_id' => 17,
                'category_id' => 18,
            ),
            70 => 
            array (
                'product_id' => 18,
                'category_id' => 5,
            ),
            71 => 
            array (
                'product_id' => 18,
                'category_id' => 8,
            ),
            72 => 
            array (
                'product_id' => 18,
                'category_id' => 9,
            ),
            73 => 
            array (
                'product_id' => 18,
                'category_id' => 11,
            ),
            74 => 
            array (
                'product_id' => 19,
                'category_id' => 8,
            ),
            75 => 
            array (
                'product_id' => 19,
                'category_id' => 11,
            ),
            76 => 
            array (
                'product_id' => 20,
                'category_id' => 8,
            ),
            77 => 
            array (
                'product_id' => 20,
                'category_id' => 9,
            ),
            78 => 
            array (
                'product_id' => 20,
                'category_id' => 15,
            ),
            79 => 
            array (
                'product_id' => 20,
                'category_id' => 16,
            ),
            80 => 
            array (
                'product_id' => 20,
                'category_id' => 17,
            ),
            81 => 
            array (
                'product_id' => 20,
                'category_id' => 18,
            ),
            82 => 
            array (
                'product_id' => 21,
                'category_id' => 8,
            ),
            83 => 
            array (
                'product_id' => 21,
                'category_id' => 9,
            ),
            84 => 
            array (
                'product_id' => 21,
                'category_id' => 16,
            ),
            85 => 
            array (
                'product_id' => 22,
                'category_id' => 8,
            ),
            86 => 
            array (
                'product_id' => 22,
                'category_id' => 16,
            ),
            87 => 
            array (
                'product_id' => 21,
                'category_id' => 5,
            ),
            88 => 
            array (
                'product_id' => 23,
                'category_id' => 5,
            ),
            89 => 
            array (
                'product_id' => 23,
                'category_id' => 8,
            ),
            90 => 
            array (
                'product_id' => 23,
                'category_id' => 13,
            ),
            91 => 
            array (
                'product_id' => 23,
                'category_id' => 14,
            ),
            92 => 
            array (
                'product_id' => 24,
                'category_id' => 5,
            ),
            93 => 
            array (
                'product_id' => 24,
                'category_id' => 8,
            ),
            94 => 
            array (
                'product_id' => 24,
                'category_id' => 16,
            ),
            95 => 
            array (
                'product_id' => 24,
                'category_id' => 17,
            ),
            96 => 
            array (
                'product_id' => 25,
                'category_id' => 5,
            ),
            97 => 
            array (
                'product_id' => 25,
                'category_id' => 8,
            ),
            98 => 
            array (
                'product_id' => 25,
                'category_id' => 9,
            ),
            99 => 
            array (
                'product_id' => 25,
                'category_id' => 12,
            ),
            100 => 
            array (
                'product_id' => 25,
                'category_id' => 15,
            ),
            101 => 
            array (
                'product_id' => 25,
                'category_id' => 16,
            ),
            102 => 
            array (
                'product_id' => 25,
                'category_id' => 17,
            ),
            103 => 
            array (
                'product_id' => 26,
                'category_id' => 5,
            ),
            104 => 
            array (
                'product_id' => 26,
                'category_id' => 8,
            ),
            105 => 
            array (
                'product_id' => 26,
                'category_id' => 11,
            ),
            106 => 
            array (
                'product_id' => 26,
                'category_id' => 16,
            ),
            107 => 
            array (
                'product_id' => 26,
                'category_id' => 17,
            ),
            108 => 
            array (
                'product_id' => 26,
                'category_id' => 18,
            ),
            109 => 
            array (
                'product_id' => 26,
                'category_id' => 15,
            ),
            110 => 
            array (
                'product_id' => 27,
                'category_id' => 1,
            ),
            111 => 
            array (
                'product_id' => 27,
                'category_id' => 8,
            ),
            112 => 
            array (
                'product_id' => 27,
                'category_id' => 9,
            ),
            113 => 
            array (
                'product_id' => 27,
                'category_id' => 20,
            ),
            114 => 
            array (
                'product_id' => 28,
                'category_id' => 5,
            ),
            115 => 
            array (
                'product_id' => 29,
                'category_id' => 5,
            ),
            116 => 
            array (
                'product_id' => 11,
                'category_id' => 1,
            ),
            117 => 
            array (
                'product_id' => 39,
                'category_id' => 8,
            ),
            118 => 
            array (
                'product_id' => 30,
                'category_id' => 8,
            ),
            119 => 
            array (
                'product_id' => 30,
                'category_id' => 9,
            ),
            120 => 
            array (
                'product_id' => 30,
                'category_id' => 14,
            ),
            121 => 
            array (
                'product_id' => 30,
                'category_id' => 18,
            ),
            122 => 
            array (
                'product_id' => 39,
                'category_id' => 14,
            ),
            123 => 
            array (
                'product_id' => 39,
                'category_id' => 9,
            ),
            124 => 
            array (
                'product_id' => 39,
                'category_id' => 21,
            ),
            125 => 
            array (
                'product_id' => 30,
                'category_id' => 21,
            ),
            126 => 
            array (
                'product_id' => 39,
                'category_id' => 18,
            ),
            127 => 
            array (
                'product_id' => 41,
                'category_id' => 21,
            ),
            128 => 
            array (
                'product_id' => 40,
                'category_id' => 21,
            ),
            129 => 
            array (
                'product_id' => 32,
                'category_id' => 21,
            ),
            130 => 
            array (
                'product_id' => 31,
                'category_id' => 21,
            ),
            131 => 
            array (
                'product_id' => 33,
                'category_id' => 5,
            ),
            132 => 
            array (
                'product_id' => 33,
                'category_id' => 18,
            ),
            133 => 
            array (
                'product_id' => 33,
                'category_id' => 21,
            ),
            134 => 
            array (
                'product_id' => 33,
                'category_id' => 8,
            ),
            135 => 
            array (
                'product_id' => 35,
                'category_id' => 5,
            ),
            136 => 
            array (
                'product_id' => 35,
                'category_id' => 8,
            ),
            137 => 
            array (
                'product_id' => 35,
                'category_id' => 18,
            ),
            138 => 
            array (
                'product_id' => 35,
                'category_id' => 21,
            ),
            139 => 
            array (
                'product_id' => 34,
                'category_id' => 5,
            ),
            140 => 
            array (
                'product_id' => 34,
                'category_id' => 8,
            ),
            141 => 
            array (
                'product_id' => 34,
                'category_id' => 18,
            ),
            142 => 
            array (
                'product_id' => 34,
                'category_id' => 21,
            ),
            143 => 
            array (
                'product_id' => 31,
                'category_id' => 8,
            ),
            144 => 
            array (
                'product_id' => 40,
                'category_id' => 8,
            ),
            145 => 
            array (
                'product_id' => 32,
                'category_id' => 8,
            ),
            146 => 
            array (
                'product_id' => 41,
                'category_id' => 8,
            ),
            147 => 
            array (
                'product_id' => 42,
                'category_id' => 5,
            ),
            148 => 
            array (
                'product_id' => 26,
                'category_id' => 22,
            ),
            149 => 
            array (
                'product_id' => 1,
                'category_id' => 22,
            ),
            150 => 
            array (
                'product_id' => 2,
                'category_id' => 22,
            ),
            151 => 
            array (
                'product_id' => 3,
                'category_id' => 22,
            ),
            152 => 
            array (
                'product_id' => 4,
                'category_id' => 22,
            ),
            153 => 
            array (
                'product_id' => 5,
                'category_id' => 22,
            ),
            154 => 
            array (
                'product_id' => 6,
                'category_id' => 22,
            ),
            155 => 
            array (
                'product_id' => 7,
                'category_id' => 22,
            ),
            156 => 
            array (
                'product_id' => 8,
                'category_id' => 22,
            ),
            157 => 
            array (
                'product_id' => 9,
                'category_id' => 22,
            ),
            158 => 
            array (
                'product_id' => 10,
                'category_id' => 22,
            ),
            159 => 
            array (
                'product_id' => 11,
                'category_id' => 22,
            ),
            160 => 
            array (
                'product_id' => 12,
                'category_id' => 22,
            ),
            161 => 
            array (
                'product_id' => 13,
                'category_id' => 22,
            ),
            162 => 
            array (
                'product_id' => 14,
                'category_id' => 22,
            ),
            163 => 
            array (
                'product_id' => 16,
                'category_id' => 22,
            ),
            164 => 
            array (
                'product_id' => 17,
                'category_id' => 22,
            ),
            165 => 
            array (
                'product_id' => 18,
                'category_id' => 22,
            ),
            166 => 
            array (
                'product_id' => 19,
                'category_id' => 22,
            ),
            167 => 
            array (
                'product_id' => 20,
                'category_id' => 22,
            ),
            168 => 
            array (
                'product_id' => 21,
                'category_id' => 22,
            ),
            169 => 
            array (
                'product_id' => 22,
                'category_id' => 22,
            ),
            170 => 
            array (
                'product_id' => 23,
                'category_id' => 22,
            ),
            171 => 
            array (
                'product_id' => 24,
                'category_id' => 22,
            ),
            172 => 
            array (
                'product_id' => 25,
                'category_id' => 22,
            ),
            173 => 
            array (
                'product_id' => 36,
                'category_id' => 8,
            ),
            174 => 
            array (
                'product_id' => 36,
                'category_id' => 14,
            ),
            175 => 
            array (
                'product_id' => 36,
                'category_id' => 21,
            ),
            176 => 
            array (
                'product_id' => 38,
                'category_id' => 21,
            ),
            177 => 
            array (
                'product_id' => 37,
                'category_id' => 21,
            ),
            178 => 
            array (
                'product_id' => 43,
                'category_id' => 20,
            ),
            179 => 
            array (
                'product_id' => 44,
                'category_id' => 20,
            ),
            180 => 
            array (
                'product_id' => 45,
                'category_id' => 8,
            ),
            181 => 
            array (
                'product_id' => 45,
                'category_id' => 9,
            ),
            182 => 
            array (
                'product_id' => 45,
                'category_id' => 14,
            ),
            183 => 
            array (
                'product_id' => 45,
                'category_id' => 18,
            ),
            184 => 
            array (
                'product_id' => 45,
                'category_id' => 21,
            ),
            185 => 
            array (
                'product_id' => 48,
                'category_id' => 8,
            ),
            186 => 
            array (
                'product_id' => 48,
                'category_id' => 9,
            ),
            187 => 
            array (
                'product_id' => 48,
                'category_id' => 14,
            ),
            188 => 
            array (
                'product_id' => 48,
                'category_id' => 18,
            ),
            189 => 
            array (
                'product_id' => 48,
                'category_id' => 21,
            ),
            190 => 
            array (
                'product_id' => 49,
                'category_id' => 21,
            ),
            191 => 
            array (
                'product_id' => 46,
                'category_id' => 21,
            ),
            192 => 
            array (
                'product_id' => 47,
                'category_id' => 21,
            ),
            193 => 
            array (
                'product_id' => 59,
                'category_id' => 1,
            ),
            194 => 
            array (
                'product_id' => 59,
                'category_id' => 8,
            ),
            195 => 
            array (
                'product_id' => 59,
                'category_id' => 9,
            ),
            196 => 
            array (
                'product_id' => 59,
                'category_id' => 20,
            ),
            197 => 
            array (
                'product_id' => 60,
                'category_id' => 1,
            ),
            198 => 
            array (
                'product_id' => 60,
                'category_id' => 8,
            ),
            199 => 
            array (
                'product_id' => 60,
                'category_id' => 9,
            ),
            200 => 
            array (
                'product_id' => 60,
                'category_id' => 20,
            ),
            201 => 
            array (
                'product_id' => 61,
                'category_id' => 1,
            ),
            202 => 
            array (
                'product_id' => 61,
                'category_id' => 8,
            ),
            203 => 
            array (
                'product_id' => 61,
                'category_id' => 9,
            ),
            204 => 
            array (
                'product_id' => 61,
                'category_id' => 20,
            ),
            205 => 
            array (
                'product_id' => 1,
                'category_id' => 23,
            ),
            206 => 
            array (
                'product_id' => 2,
                'category_id' => 23,
            ),
            207 => 
            array (
                'product_id' => 7,
                'category_id' => 23,
            ),
            208 => 
            array (
                'product_id' => 16,
                'category_id' => 23,
            ),
            209 => 
            array (
                'product_id' => 17,
                'category_id' => 23,
            ),
            210 => 
            array (
                'product_id' => 12,
                'category_id' => 23,
            ),
            211 => 
            array (
                'product_id' => 36,
                'category_id' => 23,
            ),
            212 => 
            array (
                'product_id' => 30,
                'category_id' => 23,
            ),
            213 => 
            array (
                'product_id' => 45,
                'category_id' => 23,
            ),
            214 => 
            array (
                'product_id' => 48,
                'category_id' => 23,
            ),
            215 => 
            array (
                'product_id' => 59,
                'category_id' => 23,
            ),
        ));
        
        
    }
}