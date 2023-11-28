<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'name' => 'US',
            'rate' => 2,
        ]);
        DB::table('countries')->insert([
            'name' => 'UK',
            'rate' => 3,
        ]);
        DB::table('countries')->insert([
            'name' => 'CN',
            'rate' => 2,
        ]);
    }
}
