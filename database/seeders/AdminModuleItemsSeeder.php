<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminModuleItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('admin_module_menu_items')->insert([
                [
                    'name' => 'Dashboard',
                    'route' => 'mainAdminModule',
                    'order' => '1',
                ],
                [
                    'name' => 'Users',
                    'route' => 'userAdminModule',
                    'order' => '2'
                ],
                [
                    'name' => 'Posts',
                    'route' => 'home',
                    'order' => '3'
                ]
        ]);
    }
}
