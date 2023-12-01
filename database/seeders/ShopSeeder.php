<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Shop::factory(10)->create();
        
        DB::table('shop')->insert([
            'shopId' => Str::random(10),
            'shopName' => 'Delsan',
            'address1' => 'Address 1 Test',
            'address2' => 'Address 2 Test',
            'notes' => 'Note Test',
            'remark' => 'Remark Test',
        ]);
    }
}
