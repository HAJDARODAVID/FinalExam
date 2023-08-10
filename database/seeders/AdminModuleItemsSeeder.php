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
                    'active' => '1',
                ],
                [
                    'name' => 'Users',
                    'route' => 'userAdminModule',
                    'order' => '2',
                    'active' => '1',
                ],
                [
                    'name' => 'Posts',
                    'route' => 'admPostModule',
                    'order' => '3',
                    'active' => '1',
                ],
                [
                    'name' => 'Adm Menu Items',
                    'route' => 'admItemsModule',
                    'order' => '4',
                    'active' => '1',
                ],
                [
                    'name' => 'Main Menu Items',
                    'route' => 'mainItemsModule',
                    'order' => '4',
                    'active' => '1',
                ],
                [
                    'name' => 'Roles',
                    'route' => 'rolesModule',
                    'order' => '5',
                    'active' => '1',
                ]
        ]);
    }
}
