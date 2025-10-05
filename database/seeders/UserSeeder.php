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
        User::create([
            'name' => 'Admin',
            'email' => 'edwrond@gmail.com',
            'password' => Hash::make('itnexvel2025'),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'raulruiz1001@gmail.com',
            'password' => Hash::make('itnexvel2025'),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('itnexvel2025'),
        ]);
    }
}
