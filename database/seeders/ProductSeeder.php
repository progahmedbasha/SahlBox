<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'type' => 'T-shirt',
            'price' => '30.99',
            'country_id' => 1,
            'weight' => '0.2',
        ]);
        DB::table('products')->insert([
            'type' => 'Blouse',
            'price' => '10.99',
            'country_id' => 2,
            'weight' => '0.3',
        ]);
        DB::table('products')->insert([
            'type' => 'Pants',
            'price' => '64.99',
            'country_id' => 2,
            'weight' => '0.9',
        ]);
        DB::table('products')->insert([
            'type' => 'Sweatpants',
            'price' => '84.99',
            'country_id' => 3,
            'weight' => '1.1',
        ]);
        DB::table('products')->insert([
            'type' => 'Jacket',
            'price' => '199.99',
            'country_id' => 1,
            'weight' => '2.2',
        ]);
        DB::table('products')->insert([
            'type' => 'shoes',
            'price' => '79.99',
            'country_id' => 3,
            'weight' => '1.3',
        ]);
    }
}
