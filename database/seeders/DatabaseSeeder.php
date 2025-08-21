<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\UserRole;
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
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // User::factory()->create([
        //     'name' => 'aku admin coy',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('admin12345'),
        //     'role' => UserRole::ADMIN,
        // ]);

        // User::factory()->create([
        //     'name' => 'aku user coy',
        //     'email' => 'user@gmail.com',
        //     'password' => Hash::make('user12345'),
        //     'role' => UserRole::USER,
        // ]);

        // User::factory()->create([
        //     'name' => 'aku participant coy',
        //     'email' => 'participant@gmail.com',
        //     'password' => Hash::make('participant12345'),
        //     'role' => UserRole::PARTICIPANT,
        // ]);

        // User::factory()->create([
        //     'name' => 'aku visitor coy',
        //     'email' => 'visitor@gmail.com',
        //     'password' => Hash::make('visitor12345'),
        //     'role' => UserRole::VISITOR,
        // ]);
    }
}
