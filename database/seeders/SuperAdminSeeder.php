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
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('secret')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret')
        ]);
        $admin->assignRole('Admin');

        // Creating manager
        $manager = User::create([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('secret')
        ]);
        $manager->assignRole('Manager');


        // Creating staff
        $staff = User::create([
            'name' => 'Staff',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('secret')
        ]);
        $staff->assignRole('Staff');


        // Creating Waiter
        $waiter = User::create([
            'name' => 'Waiter',
            'email' => 'waiter@gmail.com',
            'password' => bcrypt('secret')
        ]);
        $waiter->assignRole('Waiter');


        // Creating Customer
        $customer = User::create([
            'name' => 'Customer',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('secret')
        ]);
        $customer->assignRole('Customer');
    }
}
