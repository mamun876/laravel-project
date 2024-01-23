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
            'category_name' => 'Some Category',
            'category_code' => 123,
            'description' => 'Category Description',
            'created_by' => 1, // Replace with the actual user ID or creator identifier
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
