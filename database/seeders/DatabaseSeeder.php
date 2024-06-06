<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'fullName' => 'ilayda Alkan',
            'email' => 'ilayda@admin.com',
            'password' => Hash::make('admin'), // Hash the password for security
            'auth' => 0, // Set auth level to 1 for admin user
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
