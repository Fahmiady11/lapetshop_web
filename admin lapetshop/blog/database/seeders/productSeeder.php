<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'ProductName' => Str::random(10),
            'ProductType' => int::random(10),
            'Icon' => Str::random(10),
            'Pet' => int::random(10),
            'Price' => int::random(10),
            'Description' => Str::random(10),
        ]);
    }
}
