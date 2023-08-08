<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'sort_text' => 'USR',
                'long_text' => 'Registered user',
            ],
            [
                'sort_text' => 'ADM',
                'long_text' => 'Web site administrator',
            ],
            [
                'sort_text' => 'SADM',
                'long_text' => 'Web site super admin',
            ],
    ]);
    }
}
