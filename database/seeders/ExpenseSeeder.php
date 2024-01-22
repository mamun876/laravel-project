<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('expense')->insert([
            'CategoryName' => 'Shirt',
            'Reference' => 'P132',
            'Date' => '2024-01-22', // Assuming Date is a date column; replace with the actual date
            'Status' => 'Active',
            'Amount' => '500', // Assuming Amount is a numeric column
            'Description' => 'this is awesome product', // Corrected the case of 'Description'
            'Action' => null,

        ]);
    }
}
