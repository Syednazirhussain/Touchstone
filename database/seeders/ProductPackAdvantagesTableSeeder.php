<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductPackAdvantagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_pack_advantages')->delete();
        
        \DB::table('product_pack_advantages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 25,
                'text' => '{"en":"Eligible to earn 25% referral bonus on first level sign ups","pl":"Eligible to earn 25% referral bonus on first level sign ups","ja":"\\u30dc\\u30fc\\u30ca\\u30b9\\u7b2c1\\u5c64\\u3067\\u306e\\u767b\\u9332\\u306b\\u3064\\u3044\\u306625%\\u7d39\\u4ecb\\u5831\\u916c\\u53d7\\u3051\\u53d6\\u308a\\u306e\\u6a29\\u5229\\u3092\\u7372\\u5f97","es":"Elegible para ganar un 25% de bonificaci\\u00f3n de referencia en suscripciones de primer nivel"}',
                'type' => 1,
                'order' => 4,
                'created_at' => '2018-06-26 17:05:53',
                'updated_at' => '2019-04-11 17:58:20',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 25,
                'text' => '{"en":"Qualifies you as \\"Active\\" to earn commissions this month","pl":"Qualifies you as \\"Active\\" to earn commissions this month","ja":"\\u201c\\u30a2\\u30af\\u30c6\\u30a3\\u30d6\\u201d\\u3068\\u306a\\u308a\\u4eca\\u6708\\u306e\\u30b3\\u30df\\u30c3\\u30b7\\u30e7\\u30f3\\u53d7\\u3051\\u53d6\\u308a\\u306e\\u6a29\\u5229\\u3092\\u7372\\u5f97","es":"Te califica como \\"Activo\\" para ganar comisiones este mes"}',
                'type' => 1,
                'order' => 2,
                'created_at' => '2018-06-26 17:06:17',
                'updated_at' => '2018-07-03 15:49:08',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 25,
                'text' => '{"en":"FREE Shipping applies, with qualified monthly AutoShip subscription","pl":"FREE Shipping applies, with qualified monthly AutoShip subscription","ja":"\\u9069\\u683c\\u306e\\u6708\\u9593AutoShip\\u8cfc\\u8aad\\u3067\\u306f\\u914d\\u9001\\u6599\\u304c\\u7121\\u6599\\u306b\\u306a\\u308a\\u307e\\u3059","es":"Se aplica el env\\u00edo GRATUITO, con suscripci\\u00f3n calificada de AutoShip mensual"}',
                'type' => 1,
                'order' => 1,
                'created_at' => '2018-06-26 17:06:38',
                'updated_at' => '2018-07-09 14:42:18',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 25,
            'text' => '{"en":"Note: A 1-year VBO pass will be added to your order ($19.95)","pl":"Note: A 1-year VBO pass will be added to your order ($19.95)","ja":"1\\u5e74\\u9593\\u306eVBO\\u30d1\\u30b9\\uff0819.95\\u30c9\\u30eb\\u76f8\\u5f53\\uff09","es":"Pase VBO GRATIS de 1 a\\u00f1o (valor de $ 19,95)"}',
                'type' => 0,
                'order' => 0,
                'created_at' => '2018-06-26 17:06:56',
                'updated_at' => '2018-07-30 09:30:05',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 10,
                'text' => '{"en":"FREE Shipping applies, with qualified monthly AutoShip subscription","pl":"FREE Shipping applies, with qualified monthly AutoShip subscription","ja":"\\u9069\\u683c\\u306e\\u6708\\u9593AutoShip\\u8cfc\\u8aad\\u3067\\u306f\\u914d\\u9001\\u6599\\u304c\\u7121\\u6599\\u306b\\u306a\\u308a\\u307e\\u3059","es":"Se aplica el env\\u00edo GRATUITO, con suscripci\\u00f3n calificada de AutoShip mensual"}',
                'type' => 1,
                'order' => 1,
                'created_at' => '2018-06-26 17:09:22',
                'updated_at' => '2018-07-09 14:41:00',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 10,
                'text' => '{"en":"Eligible to earn 25% referral bonus on first level sign ups","pl":"Eligible to earn 25% referral bonus on first level sign ups","ja":"\\u30dc\\u30fc\\u30ca\\u30b9\\u7b2c1\\u5c64\\u3067\\u306e\\u767b\\u9332\\u306b\\u3064\\u3044\\u306625%\\u7d39\\u4ecb\\u5831\\u916c\\u53d7\\u3051\\u53d6\\u308a\\u306e\\u6a29\\u5229\\u3092\\u7372\\u5f97","es":"Elegible para ganar un 25% de bonificaci\\u00f3n de referencia en suscripciones de primer nivel"}',
                'type' => 1,
                'order' => 4,
                'created_at' => '2018-06-26 17:09:35',
                'updated_at' => '2019-04-11 17:56:25',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 10,
                'text' => '{"en":"Qualifies you as \\"Active\\" to earn commissions this month","pl":"Qualifies you as \\"Active\\" to earn commissions this month","ja":"\\u201c\\u30a2\\u30af\\u30c6\\u30a3\\u30d6\\u201d\\u3068\\u306a\\u308a\\u4eca\\u6708\\u306e\\u30b3\\u30df\\u30c3\\u30b7\\u30e7\\u30f3\\u53d7\\u3051\\u53d6\\u308a\\u306e\\u6a29\\u5229\\u3092\\u7372\\u5f97","es":"Te califica como \\"Activo\\" para ganar comisiones este mes"}',
                'type' => 1,
                'order' => 2,
                'created_at' => '2018-06-26 17:09:50',
                'updated_at' => '2018-07-03 15:35:57',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 10,
            'text' => '{"en":"Note: A 1-year VBO pass will be added to your order ($19.95)","pl":"Note: A 1-year VBO pass will be added to your order ($19.95)","ja":"1\\u5e74\\u9593\\u306eVBO\\u30d1\\u30b9\\uff0819.95\\u30c9\\u30eb\\u76f8\\u5f53\\uff09","es":"Pase VBO GRATIS de 1 a\\u00f1o (valor de $ 19,95)"}',
                'type' => 0,
                'order' => 0,
                'created_at' => '2018-06-26 17:10:11',
                'updated_at' => '2018-07-30 09:29:25',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 28,
            'text' => '{"en":"Eligible for 3-level referral bonus (25%, 10%, 5%)","pl":"Eligible for 3-level referral bonus (25%, 10%, 5%)","ja":"3\\u6bb5\\u968e\\u306e\\u7d39\\u4ecb\\u30dc\\u30fc\\u30ca\\u30b9 (25%, 10%, 5%)","es":"Elegible para bonificaci\\u00f3n de referencia de 3 niveles (25%, 10%, 5%)"}',
                'type' => 1,
                'order' => 7,
                'created_at' => '2018-06-27 17:01:14',
                'updated_at' => '2019-04-16 23:30:41',
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 28,
                'text' => '{"en":"Lifetime eligibility for STAR Bonus","pl":"Lifetime eligibility for STAR Bonus","ja":"\\u7121\\u671f\\u9650\\u3067\\u30b9\\u30bf\\u30fc\\u30dc\\u30fc\\u30ca\\u30b9\\u306b\\u9069\\u683c","es":"Elegibilidad de por vida para el bono ESTRELLA"}',
                'type' => 1,
                'order' => 5,
                'created_at' => '2018-06-27 17:01:31',
                'updated_at' => '2018-07-09 14:45:48',
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 28,
                'text' => '{"en":"Qualifies you as \\"Active\\" to earn commissions this month","pl":"Qualifies you as \\"Active\\" to earn commissions this month","ja":"\\u201c\\u30a2\\u30af\\u30c6\\u30a3\\u30d6\\u201d\\u3068\\u3057\\u3066\\u4eca\\u6708\\u306e\\u30b3\\u30df\\u30c3\\u30b7\\u30e7\\u30f3\\u3092\\u624b\\u306b\\u3059\\u308b\\u8cc7\\u683c\\u3092\\u7372\\u5f97","es":"Te califica como \\"Activo\\" para ganar comisiones este mes"}',
                'type' => 1,
                'order' => 4,
                'created_at' => '2018-06-27 17:01:42',
                'updated_at' => '2018-07-09 14:46:04',
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 28,
                'text' => '{"en":"FREE Shipping applies, with qualified monthly AutoShip subscription","pl":"FREE Shipping applies, with qualified monthly AutoShip subscription","ja":"\\u9069\\u683c\\u306e\\u6708\\u9593AutoShip\\u8cfc\\u8aad\\u3067\\u306f\\u914d\\u9001\\u6599\\u304c\\u7121\\u6599\\u306b\\u306a\\u308a\\u307e\\u3059","es":"Se aplica el env\\u00edo GRATUITO, con suscripci\\u00f3n calificada de AutoShip mensual"}',
                'type' => 1,
                'order' => 3,
                'created_at' => '2018-06-27 17:01:58',
                'updated_at' => '2018-07-09 14:46:08',
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 28,
                'text' => '{"en":"FREE 1-year VBO pass included","pl":"FREE 1-year VBO pass included","ja":"\\u3053\\u308c\\u306b\\u306f1\\u5e74\\u9593\\u306eVBO\\u30d1\\u30b9\\u304c\\u542b\\u307e\\u308c\\u307e\\u3059","es":"Incluye un pase VBO GRATUITO de 1 a\\u00f1o"}',
                'type' => 1,
                'order' => 2,
                'created_at' => '2018-06-27 17:02:32',
                'updated_at' => '2018-07-09 14:45:50',
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 28,
                'text' => '{"en":"Exclusive first-order savings!","pl":"Exclusive first-order savings!","ja":"\\u7279\\u52251\\u5e74\\u76ee\\u5272\\u5f15\\u30d7\\u30ec\\u30bc\\u30f3\\u30c8\\uff01","es":"\\u00a1Ahorros exclusivos de primera orden!"}',
                'type' => 1,
                'order' => 1,
                'created_at' => '2018-06-27 17:02:49',
                'updated_at' => '2018-07-09 14:45:29',
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 14,
                'text' => '{"en":"Eligible to earn 25% referral bonus on first level sign ups","pl":"Eligible to earn 25% referral bonus on first level sign ups","ja":"Eligible to earn 25% referral bonus on first level sign ups","es":"Eligible to earn 25% referral bonus on first level sign ups"}',
                'type' => 1,
                'order' => 3,
                'created_at' => '2018-06-30 19:45:02',
                'updated_at' => '2018-07-09 14:49:10',
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 14,
                'text' => '{"en":"Qualifies you as \\"Active\\" to earn commissions this month","pl":"Qualifies you as \\"Active\\" to earn commissions this month","ja":"Qualifies you as \\"Active\\" to earn commissions this month","es":"Qualifies you as \\"Active\\" to earn commissions this month"}',
                'type' => 1,
                'order' => 2,
                'created_at' => '2018-06-30 19:45:28',
                'updated_at' => '2018-06-30 19:45:28',
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 14,
                'text' => '{"en":"FREE Shipping applies, with qualified monthly AutoShip subscription","pl":"FREE Shipping applies, with qualified monthly AutoShip subscription","ja":"FREE Shipping applies, with qualified monthly AutoShip subscription","es":"FREE Shipping applies, with qualified monthly AutoShip subscription"}',
                'type' => 1,
                'order' => 1,
                'created_at' => '2018-06-30 19:45:48',
                'updated_at' => '2018-07-09 14:49:14',
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 14,
            'text' => '{"en":"FREE 1-year VBO pass ($19.95 value)","pl":"FREE 1-year VBO pass ($19.95 value)","ja":"FREE 1-year VBO pass ($19.95 value)","es":"FREE 1-year VBO pass ($19.95 value)"}',
                'type' => 0,
                'order' => 0,
                'created_at' => '2018-06-30 19:46:07',
                'updated_at' => '2018-07-09 14:49:51',
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 29,
            'text' => '{"en":"Eligible for 5-level referral bonus (25%, 10%, 5%, 4%, 3%)","pl":"Eligible for 5-level referral bonus (25%, 10%, 5%, 4%, 3%)","ja":"5\\u5c64\\u306e\\u7d39\\u4ecb\\u30dc\\u30fc\\u30ca\\u30b9\\u306b\\u9069\\u683c (25%, 10%, 5%, 4%, 3%)","es":"Elegible para bonificaci\\u00f3n de referencia de 5 niveles (25%, 10%, 5%, 4%, 3%)"}',
                'type' => 1,
                'order' => 6,
                'created_at' => '2018-06-30 19:58:37',
                'updated_at' => '2019-04-16 22:30:03',
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 29,
                'text' => '{"en":"Lifetime eligibility for STAR Bonus","pl":"Lifetime eligibility for STAR Bonus","ja":"\\u7121\\u671f\\u9650\\u3067\\u30b9\\u30bf\\u30fc\\u30dc\\u30fc\\u30ca\\u30b9\\u306b\\u9069\\u683c","es":"Elegibilidad de por vida para el bono ESTRELLA"}',
                'type' => 1,
                'order' => 4,
                'created_at' => '2018-06-30 19:59:23',
                'updated_at' => '2018-07-09 14:48:10',
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 29,
                'text' => '{"en":"Qualifies you as \\"Active\\" to earn commissions this month","pl":"Qualifies you as \\"Active\\" to earn commissions this month","ja":"\\u201c\\u30a2\\u30af\\u30c6\\u30a3\\u30d6\\u201d\\u3068\\u3057\\u3066\\u4eca\\u6708\\u306e\\u30b3\\u30df\\u30c3\\u30b7\\u30e7\\u30f3\\u3092\\u624b\\u306b\\u3059\\u308b\\u8cc7\\u683c\\u3092\\u7372\\u5f97","es":"Te califica como \\"Activo\\" para ganar comisiones este mes"}',
                'type' => 1,
                'order' => 3,
                'created_at' => '2018-06-30 20:01:12',
                'updated_at' => '2018-07-03 16:05:53',
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 29,
                'text' => '{"en":"FREE 1-year VBO pass included","pl":"FREE 1-year VBO pass included","ja":"\\u3053\\u308c\\u306b\\u306f1\\u5e74\\u9593\\u306eVBO\\u30d1\\u30b9\\u304c\\u542b\\u307e\\u308c\\u307e\\u3059","es":"Incluye un pase VBO GRATUITO de 1 a\\u00f1o"}',
                'type' => 1,
                'order' => 2,
                'created_at' => '2018-06-30 20:01:30',
                'updated_at' => '2018-07-09 14:48:13',
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 29,
                'text' => '{"en":"Exclusive first-order savings!","pl":"Exclusive first-order savings!","ja":"\\u7279\\u52251\\u5e74\\u76ee\\u5272\\u5f15\\u30d7\\u30ec\\u30bc\\u30f3\\u30c8\\uff01","es":"\\u00a1Ahorros exclusivos de primera orden!"}',
                'type' => 1,
                'order' => 1,
                'created_at' => '2018-06-30 20:01:51',
                'updated_at' => '2018-07-09 14:47:57',
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => 42,
            'text' => '{"en":"Eligible for 3-level referral bonus (25%, 10%, 5%)","pl":"Eligible for 3-level referral bonus (25%, 10%, 5%)","ja":"3\\u6bb5\\u968e\\u306e\\u7d39\\u4ecb\\u30dc\\u30fc\\u30ca\\u30b9 (25%, 10%, 5%)","es":"Elegible para bonificaci\\u00f3n de referencia de 3 niveles (25%, 10%, 5%)"}',
                'type' => 1,
                'order' => 8,
                'created_at' => '2018-10-03 21:26:30',
                'updated_at' => '2020-06-16 22:29:45',
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => 42,
                'text' => '{"en":"Lifetime eligibility for STAR Bonus","pl":"Lifetime eligibility for STAR Bonus","ja":"\\u7121\\u671f\\u9650\\u3067\\u30b9\\u30bf\\u30fc\\u30dc\\u30fc\\u30ca\\u30b9\\u306b\\u9069\\u683c","es":"Elegibilidad de por vida para el bono ESTRELLA"}',
                'type' => 1,
                'order' => 5,
                'created_at' => '2018-10-03 21:27:22',
                'updated_at' => '2018-10-03 21:28:21',
            ),
            25 => 
            array (
                'id' => 26,
                'product_id' => 42,
                'text' => '{"en":"Qualifies you as \\"Active\\" to earn commissions this month","pl":"Qualifies you as \\"Active\\" to earn commissions this month","ja":"\\u201c\\u30a2\\u30af\\u30c6\\u30a3\\u30d6\\u201d\\u3068\\u3057\\u3066\\u4eca\\u6708\\u306e\\u30b3\\u30df\\u30c3\\u30b7\\u30e7\\u30f3\\u3092\\u624b\\u306b\\u3059\\u308b\\u8cc7\\u683c\\u3092\\u7372\\u5f97","es":"Te califica como \\"Activo\\" para ganar comisiones este mes"}',
                'type' => 1,
                'order' => 4,
                'created_at' => '2018-10-03 21:28:03',
                'updated_at' => '2018-10-03 21:28:03',
            ),
            26 => 
            array (
                'id' => 27,
                'product_id' => 42,
                'text' => '{"en":"FREE Shipping applies, with qualified monthly AutoShip subscription","pl":"FREE Shipping applies, with qualified monthly AutoShip subscription","ja":"\\u9069\\u683c\\u306e\\u6708\\u9593AutoShip\\u8cfc\\u8aad\\u3067\\u306f\\u914d\\u9001\\u6599\\u304c\\u7121\\u6599\\u306b\\u306a\\u308a\\u307e\\u3059","es":"Se aplica el env\\u00edo GRATUITO, con suscripci\\u00f3n calificada de AutoShip mensual"}',
                'type' => 1,
                'order' => 3,
                'created_at' => '2018-10-03 21:29:13',
                'updated_at' => '2018-10-03 21:29:13',
            ),
            27 => 
            array (
                'id' => 28,
                'product_id' => 42,
                'text' => '{"en":"FREE 1-year VBO pass included","pl":"FREE 1-year VBO pass included","ja":"\\u3053\\u308c\\u306b\\u306f1\\u5e74\\u9593\\u306eVBO\\u30d1\\u30b9\\u304c\\u542b\\u307e\\u308c\\u307e\\u3059","es":"Incluye un pase VBO GRATUITO de 1 a\\u00f1o"}',
                'type' => 1,
                'order' => 2,
                'created_at' => '2018-10-03 21:29:58',
                'updated_at' => '2018-10-03 21:29:58',
            ),
            28 => 
            array (
                'id' => 29,
                'product_id' => 42,
                'text' => '{"en":"Exclusive first-order savings!","pl":"Exclusive first-order savings!","ja":"\\u7279\\u52251\\u5e74\\u76ee\\u5272\\u5f15\\u30d7\\u30ec\\u30bc\\u30f3\\u30c8\\uff01","es":"\\u00a1Ahorros exclusivos de primera orden!"}',
                'type' => 1,
                'order' => 1,
                'created_at' => '2018-10-03 21:30:41',
                'updated_at' => '2018-10-03 21:30:41',
            ),
            29 => 
            array (
                'id' => 30,
                'product_id' => 10,
                'text' => '{"en":"1 FREE instant Gift Card code to give savings","pl":"1 FREE instant Gift Card code to give savings","ja":"1 FREE instant Gift Card code to give savings","es":"\\u5272\\u5f15\\u9069\\u7528\\u306e\\u30ae\\u30d5\\u30c8\\u30ab\\u30fc\\u30c9\\uff11\\u679a"}',
                'type' => 1,
                'order' => 3,
                'created_at' => '2019-04-11 17:54:24',
                'updated_at' => '2019-04-16 23:30:04',
            ),
            30 => 
            array (
                'id' => 31,
                'product_id' => 25,
                'text' => '{"en":"1 FREE instant Gift Card code to give savings","pl":"1 FREE instant Gift Card code to give savings","ja":"1 FREE instant Gift Card code to give savings","es":"1 FREE instant Gift Card code to give savings"}',
                'type' => 1,
                'order' => 3,
                'created_at' => '2019-04-11 17:58:53',
                'updated_at' => '2019-04-11 17:58:53',
            ),
            31 => 
            array (
                'id' => 32,
                'product_id' => 42,
                'text' => '{"en":"5 FREE instant Gift Card codes to give savings","pl":"5 FREE instant Gift Card codes to give savings","ja":"\\u5272\\u5f15\\u9069\\u7528\\u306e\\u30ae\\u30d5\\u30c8\\u30ab\\u30fc\\u30c95\\u679a","es":"5 FREE instant Gift Card codes to give savings"}',
                'type' => 1,
                'order' => 6,
                'created_at' => '2019-04-11 18:02:07',
                'updated_at' => '2019-04-16 23:36:30',
            ),
            32 => 
            array (
                'id' => 33,
                'product_id' => 29,
                'text' => '{"en":"5 FREE instant Gift Card codes to give savings","pl":"5 FREE instant Gift Card codes to give savings","ja":"\\u5272\\u5f15\\u9069\\u7528\\u306e\\u30ae\\u30d5\\u30c8\\u30ab\\u30fc\\u30c95\\u679a","es":"5 FREE instant Gift Card codes to give savings"}',
                'type' => 1,
                'order' => 5,
                'created_at' => '2019-04-16 22:32:22',
                'updated_at' => '2019-04-16 22:32:22',
            ),
            33 => 
            array (
                'id' => 34,
                'product_id' => 28,
                'text' => '{"en":"5 FREE instant Gift Card codes to give savings","pl":"5 FREE instant Gift Card codes to give savings","ja":"\\u5272\\u5f15\\u9069\\u7528\\u306e\\u30ae\\u30d5\\u30c8\\u30ab\\u30fc\\u30c95\\u679a","es":"5 FREE instant Gift Card codes to give savings"}',
                'type' => 1,
                'order' => 6,
                'created_at' => '2019-04-16 23:31:21',
                'updated_at' => '2019-04-16 23:31:21',
            ),
            34 => 
            array (
                'id' => 35,
                'product_id' => 42,
            'text' => '{"en":"5 FREE Calm CBD Oil sample credits to share (US Only)","pl":"5 FREE Calm CBD Oil sample credits to share (US Only)","ja":"5 FREE Calm CBD Oil sample credits to share (US Only)","es":"5 FREE Calm CBD Oil sample credits to share (US Only)"}',
                'type' => 1,
                'order' => 7,
                'created_at' => '2020-06-16 22:29:30',
                'updated_at' => '2020-06-16 22:31:30',
            ),
            35 => 
            array (
                'id' => 36,
                'product_id' => 1,
                'text' => '{"en":"Officia id voluptate","pl":"In aut deleniti tota","ja":"Ad vel debitis sunt ","es":"In incididunt praese","th":"Quas magnam qui est"}',
                'type' => 1,
                'order' => 7889,
                'created_at' => '2021-05-31 08:21:16',
                'updated_at' => '2021-05-31 08:21:16',
            ),
        ));
        
        
    }
}