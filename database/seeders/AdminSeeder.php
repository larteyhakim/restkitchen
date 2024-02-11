<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Admin','email' => 'admin@gmail.com','password'=>bcrypt('secret'),'role_id'=>'1']
        ];

        foreach($items as $items){
            User::create($items);
        }
    }
}
