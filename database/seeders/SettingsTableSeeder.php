<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'terms' => '{"en":"<p><strong>You can download a complete copy of our policies and procedures here: <a href=\\"https:\\/\\/mytouchstoneoffice.com\\/assets\\/pdf\\/TouchstoneTermsAndConditions.pdf\\">https:\\/\\/mytouchstoneoffice.com\\/assets\\/pdf\\/TouchstoneTermsAndConditions.pdf<\\/a><\\/strong><\\/p>","pl":"<p><strong>You can download a complete copy of our policies and procedures here: <a href=\\"https:\\/\\/mytouchstoneoffice.com\\/assets\\/pdf\\/TouchstoneTermsAndConditions.pdf\\">https:\\/\\/mytouchstoneoffice.com\\/assets\\/pdf\\/TouchstoneTermsAndConditions.pdf<\\/a><\\/strong><\\/p>","jp":"<p><strong>You can download a complete copy of our policies and procedures here: <a href=\\"http:\\/\\/www.mytouchstoneoffice.com\\/assets\\/pdf\\/TouchstoneTermsAndConditions.pdf\\" target=\\"_blank\\" rel=\\"noopener noreferrer\\">http:\\/\\/www.mytouchstoneoffice.com\\/assets\\/pdf\\/TouchstoneTermsAndConditions.pdf<\\/a><\\/strong><\\/p>","ja":"<p><strong>You can download a complete copy of our policies and procedures here: <a href=\\"https:\\/\\/mytouchstoneoffice.com\\/assets\\/pdf\\/TouchstoneTermsAndConditions.pdf\\">https:\\/\\/mytouchstoneoffice.com\\/assets\\/pdf\\/TouchstoneTermsAndConditions.pdf<\\/a><\\/strong><\\/p>","es":"<p><strong>You can download a complete copy of our policies and procedures here: <a href=\\"https:\\/\\/mytouchstoneoffice.com\\/assets\\/pdf\\/TouchstoneTermsAndConditions.pdf\\">https:\\/\\/mytouchstoneoffice.com\\/assets\\/pdf\\/TouchstoneTermsAndConditions.pdf<\\/a><\\/strong><\\/p>","th":"<p><strong>You can download a complete copy of our policies and procedures here: <a href=\\"https:\\/\\/mytouchstoneoffice.com\\/assets\\/pdf\\/TouchstoneTermsAndConditions.pdf\\">https:\\/\\/mytouchstoneoffice.com\\/assets\\/pdf\\/TouchstoneTermsAndConditions.pdf<\\/a><\\/strong><\\/p>"}',
                'created_at' => '2017-01-19 14:11:18',
                'updated_at' => '2021-05-31 08:45:01',
            'phone_us' => '+1 (919) 900-4300',
                'phone_uk' => '020 3887 3838',
                'phone_eu' => '+44 20 3887 3838',
                'email' => 'support@thegoodinside.com',
                'hours' => '{"en":"<p>Mon.-Thu. 9 a.m.-6 p.m. ET<br \\/>Fri. 9 a.m.-5 p.m. ET<\\/p>","pl":"<p>Mon.-Thu. 9 a.m.-6 p.m. ET<br \\/>Fri. 9 a.m.-5 p.m. ET<\\/p>","jp":"<p>Mon.-Thu. 9 a.m.-6 p.m. ET<br \\/>Fri. 9 a.m.-5 p.m. ET<\\/p>","ja":"<p>Mon.-Thu. 9 a.m.-6 p.m. ET<br \\/>Fri. 9 a.m.-5 p.m. ET<\\/p>","es":"<p>Mon.-Thu. 9 a.m.-6 p.m. ET<br \\/>Fri. 9 a.m.-5 p.m. ET<\\/p>","th":"<p>Mon.-Thu. 9 a.m.-6 p.m. ET<br \\/>Fri. 9 a.m.-5 p.m. ET<\\/p>"}',
                'checkout_html_text' => '{"en":"<div class=\\"shopperapproved_widget sa_rotate sa_count3 sa_vertical sa_count3 sa_bgWhite sa_colorBlack sa_borderGray sa_rounded sa_FjY sa_fixed sa_hidelinks sa_large sa_showdate \\" style=\\"min-height: 100px; overflow: hidden;\\">&nbsp;<\\/div>\\r\\n<div style=\\"margin-top: 25px; border-radius: 10px; border: 0px #ebebeb solid; padding: 10px; line-height: 22px;\\"><img style=\\"margin-right: 25px;\\" src=\\"..\\/..\\/..\\/..\\/wp-content\\/uploads\\/hp_badge_mbg.png\\" width=\\"100\\" align=\\"left\\" \\/><strong>Our Money Back Guarantee<\\/strong><br \\/><span style=\\"font-size: 12px;\\">We want you to be fully satis\\ufb01ed. If you are not satis\\ufb01ed, you may return the item within 30 days from the order date for a full refund of the purchase price, minus the shipping and handling charge.<\\/span><\\/div>","pl":"<div class=\\"shopperapproved_widget sa_rotate sa_count3 sa_vertical sa_count3 sa_bgWhite sa_colorBlack sa_borderGray sa_rounded sa_FjY sa_fixed sa_hidelinks sa_large sa_showdate \\" style=\\"min-height: 100px; overflow: hidden;\\">&nbsp;<\\/div>\\r\\n<div style=\\"border-radius: 10px; border: 1px #ebebeb solid; padding: 10px; line-height: 22px;\\"><img style=\\"margin-right: 25px;\\" src=\\"..\\/..\\/..\\/..\\/wp-content\\/uploads\\/hp_badge_mbg.png\\" width=\\"100\\" align=\\"left\\" \\/><strong>Our Money Back Guarantee<\\/strong><br \\/><span style=\\"font-size: 12px;\\">We want you to be fully satis\\ufb01ed. If you are not satis\\ufb01ed, you may return the item within 30 days from the order date for a full refund of the purchase price, minus the shipping and handling charge.<\\/span><\\/div>","ja":"<div class=\\"shopperapproved_widget sa_rotate sa_count3 sa_vertical sa_count3 sa_bgWhite sa_colorBlack sa_borderGray sa_rounded sa_FjY sa_fixed sa_hidelinks sa_large sa_showdate \\" style=\\"min-height: 100px; overflow: hidden;\\">&nbsp;<\\/div>\\r\\n<div style=\\"border-radius: 10px; border: 1px #ebebeb solid; padding: 10px; line-height: 22px;\\"><img style=\\"margin-right: 25px;\\" src=\\"..\\/..\\/..\\/..\\/wp-content\\/uploads\\/hp_badge_mbg.png\\" width=\\"100\\" align=\\"left\\" \\/><strong>Our Money Back Guarantee<\\/strong><br \\/><span style=\\"font-size: 12px;\\">We want you to be fully satis\\ufb01ed. If you are not satis\\ufb01ed, you may return the item within 30 days from the order date for a full refund of the purchase price, minus the shipping and handling charge.<\\/span><\\/div>","es":"<div class=\\"shopperapproved_widget sa_rotate sa_count3 sa_vertical sa_count3 sa_bgWhite sa_colorBlack sa_borderGray sa_rounded sa_FjY sa_fixed sa_hidelinks sa_large sa_showdate \\" style=\\"min-height: 100px; overflow: hidden;\\">&nbsp;<\\/div>\\r\\n<div style=\\"border-radius: 10px; border: 1px #ebebeb solid; padding: 10px; line-height: 22px;\\"><img style=\\"margin-right: 25px;\\" src=\\"..\\/..\\/..\\/..\\/wp-content\\/uploads\\/hp_badge_mbg.png\\" width=\\"100\\" align=\\"left\\" \\/><strong>Our Money Back Guarantee<\\/strong><br \\/><span style=\\"font-size: 12px;\\">We want you to be fully satis\\ufb01ed. If you are not satis\\ufb01ed, you may return the item within 30 days from the order date for a full refund of the purchase price, minus the shipping and handling charge.<\\/span><\\/div>","th":"<div class=\\"shopperapproved_widget sa_rotate sa_count3 sa_vertical sa_count3 sa_bgWhite sa_colorBlack sa_borderGray sa_rounded sa_FjY sa_fixed sa_hidelinks sa_large sa_showdate \\" style=\\"min-height: 100px; overflow: hidden;\\">&nbsp;<\\/div>\\r\\n<div style=\\"margin-top: 25px; border-radius: 10px; border: 0px #ebebeb solid; padding: 10px; line-height: 22px;\\"><img style=\\"margin-right: 25px;\\" src=\\"..\\/..\\/..\\/..\\/wp-content\\/uploads\\/hp_badge_mbg.png\\" width=\\"100\\" align=\\"left\\" \\/><strong>Our Money Back Guarantee<\\/strong><br \\/><span style=\\"font-size: 12px;\\">We want you to be fully satis\\ufb01ed. If you are not satis\\ufb01ed, you may return the item within 30 days from the order date for a full refund of the purchase price, minus the shipping and handling charge.<\\/span><\\/div>"}',
                'opengraph_image_id' => 998,
            ),
        ));
        
        
    }
}