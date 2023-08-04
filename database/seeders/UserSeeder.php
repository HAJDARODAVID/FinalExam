<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'David',
                'email' => 'david@gmail.com',
                'password' => Hash::make('123456789'),
                'role' => '1',
            ],
            [
                'name' => 'Pero',
                'email' => 'pero@gmail.com',
                'password' => Hash::make('123456789'),
                'role' => '0',
            ],
            [
                'name' => 'Marko',
                'email' => 'marko@gmail.com',
                'password' => Hash::make('123456789'),
                'role' => '0',
            ]
    ]);
    }
}
