<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{

    public function run(): void
    {
        $user= [
            ["name"=>"Alex", "email"=>"alex@dd.com", "password"=>"0899"],
            ["name"=>"Delex", "email"=>"delex@dd.com", "password"=>"0899"],
            ["name"=>"Flex", "email"=>"flex@dd.com", "password"=>"0899"]
        ];
        User::insert($user);
    }
}
