<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brand')->insert([
            'image' => 'apple_logo.jpg', // Replace with actual image path or URL
            'brand_name' => 'Apple',
            'brand_description' => 'Innovative technology company',
            'action' => 'create',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('brand')->insert([
            'image' => 'adidas_logo.jpg', // Replace with actual image path or URL
            'brand_name' => 'Adidas',
            'brand_description' => 'Sportswear and footwear brand',
            'action' => 'create',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('brand')->insert([
            'image' => 'colgate_logo.jpg', // Replace with actual image path or URL
            'brand_name' => 'Colgate',
            'brand_description' => 'Oral care products',
            'action' => 'create',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('brand')->insert([
            'image' => 'samsung_logo.jpg', // Replace with actual image path or URL
            'brand_name' => 'Samsung',
            'brand_description' => 'Electronics and technology conglomerate',
            'action' => 'create',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
