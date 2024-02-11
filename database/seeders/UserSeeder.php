<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            $items = [
                ['name' => 'Manager','email' => 'manager@gmail.com','password'=>bcrypt('secret'),'role_id'=>'2'],
                ['name' => 'Kitchen Staff','email' => 'kitchenstaff@gmail.com','password'=>bcrypt('secret'),'role_id'=>'3'],
                ['name' => 'Staff','email' => 'staff@gmail.com','password'=>bcrypt('secret'),'role_id'=>'4'],
                ['name' => 'Customer','email' => 'customer@gmail.com','password'=>bcrypt('secret'),'role_id'=>'5'],
            ];
    
            foreach($items as $items){
                User::create($items);
            }
        }
    
}
