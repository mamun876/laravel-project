<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            'category_name' => 'Electronics',
            'category_code' => 101,
            'description' => 'Electronics category description',
            'created_by' => "Admin", // Replace with the actual user ID or creator identifier
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category')->insert([
            'category_name' => 'Clothing',
            'category_code' => 102,
            'description' => 'Clothing category description',
            'created_by' => 'Admin', // Replace with the actual user ID or creator identifier
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category')->insert([
            'category_name' => 'Home',
            'category_code' => 103,
            'description' => 'Home category description',
            'created_by' => 'Admin', // Replace with the actual user ID or creator identifier
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
