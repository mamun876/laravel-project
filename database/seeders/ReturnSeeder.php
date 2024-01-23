<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ReturnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('return')->insert([
            'product_name' => 'Shirt',
            'date' => '2024-01-22', // Replace with the actual date in the correct format ('YYYY-MM-DD')
            'customer' => 'John Doe',
            'status' => 'Received', // Assuming 'status' is a numeric field
            'grand_total' => '100.00', // Assuming 'grand_total' is a string field
            'paid' => '50.00', // Assuming 'paid' is a string field and nullable
            'due' => '50.00', // Assuming 'due' is a string field
            'payment_status' => 'Paid', // Assuming 'payment_status' is a string field
            
        ]);
    }
}
