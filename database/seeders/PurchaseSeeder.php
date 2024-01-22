<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('purchase')->insert([
            'SupplierName' => 'sadid',
            'Reference' => 'P132',
            'Date' => '2024-01-22', // Assuming Date is a date column; replace with the actual date
            'Status' => 'Received',
            'GrandTotal' => '500', // Assuming GrandTotal is a numeric column
            'Paid' => '120',
            'Due' => '380',
            'PaymentStatus' => 'Paid',
            'Action' => 1,
        ]);
        DB::table('purchase')->insert([
            'SupplierName' => 'Shubho',
            'Reference' => 'S132',
            'Date' => '2024-02-22', // Assuming Date is a date column; replace with the actual date
            'Status' => 'Pending',
            'GrandTotal' => '700', // Assuming GrandTotal is a numeric column
            'Paid' => '220',
            'Due' => '480',
            'PaymentStatus' => 'Paid',
            'Action' => 1,
        ]);
    }
}
