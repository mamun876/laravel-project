<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(ProductSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SalesSeeder::class);
        $this->call(PurchaseSeeder::class);
        $this->call(ExpenseSeeder::class);
        $this->call(TransferSeeder::class);
        $this->call(QuotationSeeder::class);
        $this->call(ReturnSeeder::class);
        $this->call(PeopleSeeder::class);
        $this->call(PlaceSeeder::class);
    }
}
