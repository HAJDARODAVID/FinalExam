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
                'description' => 'Can only read posts and leave a comment',
                'gate_name' => 'user',
            ],
            [
                'sort_text' => 'EDITOR',
                'long_text' => 'Web site editor',
                'description' => 'Can leave a post',
                'gate_name' => 'editor',
            ],
            
    ]);
    }
}
