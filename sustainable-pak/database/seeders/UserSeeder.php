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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'A',
            'password' => Hash::make('adminpass'),
            'remember_token' => Str::random(10),
        ]);
        // DB::table('users')->insert([
        //     'name' => 'Admin3',
        //     'email' => 'admin3@gmail.com',
        //     'role' => 'A',
        //     'password' => bcrypt('password'),
        //     'remember_token' => Str::random(10),
        // ]);
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@hotmail.com',
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
// <?php

// namespace Database\Seeders;

// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;

// class UsersTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         // Insert a default user
//         DB::table('users')->insert([
//             'name' => 'Your Name',
//             'email' => 'your@email.com',
//             'password' => Hash::make('your_password'),
//             'remember_token' => Str::random(10),
//         ]);

//         // Insert more users if needed
//         // DB::table('users')->insert([
//         //     'name' => 'Another User',
//         //     'email' => 'another@email.com',
//         //     'password' => Hash::make('another_password'),
//         //     'remember_token' => Str::random(10),
//         // ]);

//         // You can add more user records as needed
//     }
// }
