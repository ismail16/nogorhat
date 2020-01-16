<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'store_name' => 'Easy Shop',
            'store_logo' => 'https://www.bigstockphoto.com/images/homepage/module-6.jpg',
            'store_title' => 'Forget the Rules, if you like it, wear it!',
            'store_phone' => '123456789',
            'store_email' => 'admin@email.com',
            'store_website' => 'www.admin.com',
            'store_currency' => '$',
            'store_address' => 'Dhaka',
            'footer_text' => 'Copyright © 2019 Shop. All Right Reserved',
            'facebook' => '',
            'instagram' => '',
            'youtube' => '',
            'twitter' => '',
            'linkedIn' => '',
            'status' => 1,
        ]);
    }
}
