<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'yokohama.limited@gmail.com',
                'user_type' => 'admin',
                'password' => Hash::make('@Ca6138787588'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
