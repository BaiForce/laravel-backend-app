<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();
        {
            User::factory(5)->create();
            User::create([
                'name' => 'bai',
                'email' => 'admin@gmail.com',
                'email_verified_at'  => now(),
                'password' => Hash::make('123456'),
            ]);
        }
    }   
}
