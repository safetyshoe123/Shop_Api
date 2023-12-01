<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branch')->insert([
            'shopId' => Str::random(10),
            'branchId' => Str::random(10),
            'branchName' => 'DelsanV3',
            'address1' => 'Address 1 Test',
            'address2' => 'Address 2 Test',
            'dateOpened' => '2023/11/25',
            'type' => '1',
            'notes' => 'Note Test',
            'remark' => 'Remark Test',
        ]);
    }
}
