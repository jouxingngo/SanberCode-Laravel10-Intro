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
                // Membuat user admin
                User::create([
                    'name' => 'Admin User',
                    'email' => 'admin@example.com',
                    'password' => Hash::make('password'), // password harus di-hash
                    'role' => 'admin',
                ]);
        
                // Membuat user biasa
                User::create([
                    'name' => 'Regular User',
                    'email' => 'user@example.com',
                    'password' => Hash::make('password'),
                    'role' => 'user',
                ]);
    }
}
