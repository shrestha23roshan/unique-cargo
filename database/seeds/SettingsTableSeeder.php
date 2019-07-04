<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'site_name' => 'Unique Cargo',
                'site_email' => 'info@uniquecargo.com',
                'site_phone1' => '0123456789',
                'site_phone2' => '0123456780',
                'site_address' => 'Dhobighat',
                'site_description' => 'Unique Cargo description.',
                'site_logo' => null,
                'site_favicon' => null,
                'site_copyright' => 'Copyright © 2019 Unique Cargo. All Rights Reserved.',
                'facebook_url'=> 'url',
                'twitter_url'=> 'url',
                'youtube_url'=> 'url',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
