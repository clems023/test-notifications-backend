<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'role' => "user",
            'username' => "user",
            'password' => bcrypt('password'),
        ]);

        User::create([
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'role' => "author",
            'username' => "author",
            'password' => bcrypt('password'),
        ]);
    }
}
