<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@hotmail.com',
            'role' => 'U',
            'password' => bcrypt('userpass'),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@hotmail.com',
            'role' => 'U',
            'password' => bcrypt('userpass'),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'user3',
            'email' => 'user3@hotmail.com',
            'role' => 'U',
            'password' => bcrypt('userpass'),
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'business1',
            'email' => 'business1@hotmail.com',
            'role' => 'B',
            'password' => bcrypt('busipass'),
            'remember_token' => Str::random(10),
        ]);

    }
}