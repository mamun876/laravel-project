<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class TransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transfer')->insert([
            'date' => '2024-01-22', // Assuming 'date' is a date column; replace with the actual date
            'from' => 'P132',
            'items' => 'Sadid',
            'status' => 'Active',
            

        ]);
    }
}
