<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('people')->insert([
            'customer_name' => 'John Doe',
            'code' => 'JD123',
            'customer' => 'JD Customer',
            'phone' => '123456789',
            'email' => 'john.doe@example.com',
            'country' => 'Ban', // or null if not applicable
            'action' => 'Some action',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
