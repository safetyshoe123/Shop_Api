<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Jan Balbon',
            'email' => 'jan@gmail.com',
            'password' => Hash::make('123123123')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Rey Mark Barriga',
            'email' => 'reymark@gmail.com',
            'password' => Hash::make('123123123')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Godwin Mat-ao',
            'email' => 'adwin@gmail.com',
            'password' => Hash::make('123123123')
        ]);
        $productManager->assignRole('Product Manager');
    }
}
