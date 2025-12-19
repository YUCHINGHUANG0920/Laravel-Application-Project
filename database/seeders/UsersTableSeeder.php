<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        // create 25 users randomly
        User::factory()->count(25)->create();

        // create one admin account
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'is_admin' => 1,
            'password' => Hash::make('password'),
        ]);
    }
}
