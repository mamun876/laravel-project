<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            'name' =>"Electronics",
            'active'=>"1"
        ]);
        DB::table('category')->insert([
            'name' =>"Office Supplements",
            'active'=>"1"
        ]);
        DB::table('category')->insert([
            'name' =>"Headers",
            'active'=>"1"
        ]);
        DB::table('category')->insert([
            'name' =>"Phone",
            'active'=>"1"
        ]);
        DB::table('category')->insert([
            'name' =>"Computer",
            'active'=>"1"
        ]);
        DB::table('category')->insert([
            'name' =>"Clothing",
            'active'=>"1"
        ]);
        DB::table('category')->insert([
            'name' =>"Others",
            'active'=>"1"
        ]);
    }
}
