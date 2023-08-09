<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MainMenuItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('main_menu_items')->insert([
            [
                'name' => 'New Post',
                'route' => 'mainAdminModule',
                'order' => '1',
                'active' => '1',
                'role_id' => '2',
            ],
            [
                'name' => 'My posts',
                'route' => 'mainAdminModule',
                'order' => '2',
                'active' => '1',
                'role_id' => '2',
            ],
            [
                'name' => 'Profile',
                'route' => 'mainAdminModule',
                'order' => '3',
                'active' => '1',
                'role_id' => '1',
            ],
    ]);
    }
}
