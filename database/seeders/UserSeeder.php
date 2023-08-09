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
                'is_admin' => '1',
                'role' => '2',
                'avatar' => 'default.png',
            ],
            [
                'name' => 'Pero',
                'email' => 'pero@gmail.com',
                'password' => Hash::make('123456789'),
                'is_admin' => '0',
                'role' => '2',
                'avatar' => 'default.png',
            ],
            [
                'name' => 'Marko',
                'email' => 'marko@gmail.com',
                'password' => Hash::make('123456789'),
                'is_admin' => '0',
                'role' => '1',
                'avatar' => 'default.png',
            ]
    ]);
    }
}
