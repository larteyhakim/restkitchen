<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Admin', 'guard_name' => 'web'],
            ['name' => 'Manager', 'guard_name' => 'web'],
            ['name' => 'Kitchen Staff', 'guard_name' => 'web'],
            ['name' => 'Staff', 'guard_name' => 'web'],
            ['name' => 'Customer', 'guard_name' => 'web'],  
        
        ];
        foreach($items as $items){
            Role::create($items);
        }
    }
}
