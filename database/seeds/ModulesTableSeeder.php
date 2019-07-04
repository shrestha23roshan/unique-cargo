<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            [
                'parent_id' => '0',
                'module_name' => 'User Management',
                'slug' => 'admin.privilege',
                'menu-class' => 'privilege',
                'icon' => 'fa fa-cog',
                'order_position' => '1',
                'is_active' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'parent_id' => '1',
                'module_name' => 'Role',
                'slug' => 'admin.privilege.role',
                'menu-class' => 'role',
                'icon' => 'fa fa-users',
                'order_position' => '1',
                'is_active' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'parent_id' => '1',
                'module_name' => 'User',
                'slug' => 'admin.privilege.user',
                'menu-class' => 'user',
                'icon' => 'fa fa-user',
                'order_position' => '2',
                'is_active' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'parent_id' => '0',
                'module_name' => 'Media Management',
                'slug' => 'admin.media-management',
                'menu-class' => 'media-management',
                'icon' => 'fa fa-image',
                'order_position' => '1',
                'is_active' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'parent_id' => '4',
                'module_name' => 'Banner',
                'slug' => 'admin.media-management.banner',
                'menu-class' => 'banner',
                'icon' => 'fa fa-image',
                'order_position' => '1',
                'is_active' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'parent_id' => '4',
                'module_name' => 'Brand',
                'slug' => 'admin.media-management.brand',
                'menu-class' => 'brand',
                'icon' => 'fa fa-tags',
                'order_position' => '2',
                'is_active' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'parent_id' => '0',
                'module_name' => 'Content Management',
                'slug' => 'admin.content-management',
                'menu-class' => 'content-management',
                'icon' => 'fa fa-file-text',
                'order_position' => '1',
                'is_active' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'parent_id' => '7',
                'module_name' => 'About Us',
                'slug' => 'admin.content-management.about-us',
                'menu-class' => 'about-us',
                'icon' => 'fa fa-file-image-o',
                'order_position' => '1',
                'is_active' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'parent_id' => '7',
                'module_name' => 'Services',
                'slug' => 'admin.content-management.services',
                'menu-class' => 'services',
                'icon' => 'fa fa-clipboard',
                'order_position' => '2',
                'is_active' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'parent_id' => '7',
                'module_name' => 'Works',
                'slug' => 'admin.content-management.works',
                'menu-class' => 'works',
                'icon' => 'fa fa-briefcase',
                'order_position' => '3',
                'is_active' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'parent_id' => '0',
                'module_name' => 'Testimonial',
                'slug' => 'admin.testimonial',
                'menu-class' => 'testimonial',
                'icon' => 'fa fa-user',
                'order_position' => '1',
                'is_active' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'parent_id' => '0',
                'module_name' => 'Settings',
                'slug' => 'admin.settings',
                'menu-class' => 'settings',
                'icon' => 'fa fa-gears',
                'order_position' => '1',
                'is_active' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'parent_id' => '0',
                'module_name' => 'SEO',
                'slug' => 'admin.seo',
                'menu-class' => 'seo',
                'icon' => 'fa fa-search',
                'order_position' => 1,
                'is_active' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
