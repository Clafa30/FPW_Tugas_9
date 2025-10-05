<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // contoh user biasa
        User::updateOrCreate(
            ['email' => 'test@example.com'], // kunci unik
            [
                'name' => 'Test User',
                'password' => Hash::make('password123'),
                'role' => 'user',
            ]
        );
        
        // user admin
        User::updateOrCreate(
            ['email' => 'admin@example.com'], 
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password123'), 
                'role' => 'admin',
            ]
        );
    }
}
