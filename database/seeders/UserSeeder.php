<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Chike Admin',
            'email' => 'admin@test.com', // Put your preferred login email here
            'password' => Hash::make('password'), // Put your preferred password here
            // If your users table has a 'role' column for admin access, uncomment the line below:
            // 'role' => 'admin', 
        ]);
    }
}