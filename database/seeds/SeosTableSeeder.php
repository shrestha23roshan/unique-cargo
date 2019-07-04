<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SeosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seos')->insert([
            [
                'page' => 'home',
                'meta_title' => 'Home',
                'meta_tags' => 'meta tags',
                'meta_description' => 'meta description',
                'created_by' => null,
                'updated_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'services',
                'meta_title' => 'Service ',
                'meta_tags' => 'meta tags',
                'meta_description' => 'meta description',
                'created_by' => null,
                'updated_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'works',
                'meta_title' => 'Work',
                'meta_tags' => 'meta tags',
                'meta_description' => 'meta description',
                'created_by' => null,
                'updated_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'about-us',
                'meta_title' => 'About Us',
                'meta_tags' => 'meta tags',
                'meta_description' => 'meta description',
                'created_by' => null,
                'updated_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'contact-us',
                'meta_title' => 'Contact Us',
                'meta_tags' => 'meta tags',
                'meta_description' => 'meta description',
                'created_by' => null,
                'updated_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
