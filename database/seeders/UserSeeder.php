<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();
        User::create([
            'name' => 'Gerson Wissaluno',
            'email' => 'gerson@gmail.com',
            'email_verified_at'  => now(),
            'role' => 'admin',
            'phone' => '6281350090027',
            'bio' => 'flutter dev',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at'  => now(),
            'role' => 'superadmin',
            'phone' => '6281350090027',
            'bio' => 'laravel dev',
            'password' => Hash::make('123456'),
        ]);
    }
}
