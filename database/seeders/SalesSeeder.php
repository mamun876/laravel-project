<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sales')->insert([
            'Date' => '2023-01-12', // Use the correct date format
            'CustomerName' => 'Sadid',
            'Reference' => 'C643',
            'Status' => 'Pending',
            'Payment' => 'Due',
            'Total' => 200, // Assuming 'Total' is a numeric field
            'Paid' => 100, // Assuming 'Paid' is a numeric field
            'Due' => 100, // Assuming 'Due' is a numeric field
            'Biller' => 'Admin',
            'Action' => 1, // Assuming 'Action' is a numeric field
        ]);
    }
}
