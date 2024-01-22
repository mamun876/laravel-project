<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            'name' =>"sadid",
            'sku' => 'P132',
            'price' => '500',
            'qty' => '5',
            'image' => 'sadid.jpeg',
            'description' => 'this is awesome product',
            'attribute_value_id' => '1',
            'brand_id' => '1',
            'category_id' => '1',
            'store_id' => '1',
            'availability' => '1',
            
        ]);
        DB::table('product')->insert([
            'name' =>"Shirt",
            'sku' => 'S132',
            'price' => '500',
            'qty' => '5',
            'image' => 'sadid.jpeg',
            'description' => 'this is awesome product',
            'attribute_value_id' => '2',
            'brand_id' => '2',
            'category_id' => '2',
            'store_id' => '2',
            'availability' => '2',
            
        ]);
        // Product::factory(10)->create();
    }
}
