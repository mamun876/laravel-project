<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class QuotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quotation')->insert([
            'product_name' => 'Product1',
            'reference' => 'Q123',
            'customer_name' => 'John Doe', // Replace with the actual customer name or numeric value
            'status' => 'Active',
            'grand_total' => '500.00', // Replace with the actual numeric value or null
            'action' => 'Generate',

        ]);
    }
}
