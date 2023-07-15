<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1000)->create();
        Customer::factory(1000)->create();

        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@system.com',
            'password' => Hash::make('admin123'),
        ]);

    }
}
