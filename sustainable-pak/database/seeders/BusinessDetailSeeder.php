<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class BusinessDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('role', 'B')->inRandomOrder()->first(); // Get a random user with role 'B'

        DB::table('businesses')->insert([
            'description' => 'Business Description 1',
            'category_id' => rand(1, 4), // Assuming categories range from 1 to 5
            'product1' => 'Product A',
            'product2' => 'Product B',
            'product3' => 'Product C',
            'main_link' => 'http://example.com/business',
            'web_link' => 'http://example.com',
            'fb_link' => 'http://facebook.com/business',
            'insta_link' => 'http://instagram.com/business',
            'twitter_link' => 'http://twitter.com/business',
            'lin_link' => 'http://linkedin.com/business',
            'user_id' => $user->id, // Assuming user IDs correspond to the business IDs
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
