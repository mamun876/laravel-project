<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PurchaseReturn extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('purchase_return')->insert([
            'image' => 'Apex.jpg',
            'date' => '2024-01-31',
            'supplier' => 'Apex Computer',
            'reference' => 'PR123',
            'status' => 'Pending',
            'grand_total' => 100.00,
            'paid' => 50.00,
            'due' => 50.00,
            'payment' => 0.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('purchase_return')->insert([
            'image' => 'Modern.jpg',
            'date' => '2024-01-31',
            'supplier' => 'Modern Automobile',
            'reference' => 'PR123',
            'status' => 'Paid',
            'grand_total' => 50.00,
            'paid' => 50.00,
            'due' => 50.00,
            'payment' => 0.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
