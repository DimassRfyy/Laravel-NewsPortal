<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'role' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Writer User',
            'role' => 'writer',
            'email' => 'writer@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Regular User',
            'role' => 'user',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
