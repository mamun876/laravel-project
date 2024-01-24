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
            'product_name' => 'Monitor',
            'sku' => 'SKU123',
            'category' => 'Electronics',
            'brand' => 'Sony',
            'price' => 19.99,
            'unit' => 5.0,
            'qty' => '10',
            'created_by' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
            
           
        ]);
      
        DB::table('product')->insert([
            'product_name' => 'Couch',
            'sku' => 'SKU789',
            'category' => 'Home',
            'brand' => 'IKEA',
            'price' => 499.99,
            'unit' => 1.0,
            'qty' => '5',
            'created_by' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
       
        // Product::factory(10)->create();
    }
}
