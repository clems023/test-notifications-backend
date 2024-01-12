<?php

namespace Database\Seeders;

use App\Models\Notification;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NotificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Notification::create([
            "title" => "Rapport sur l'actualité",
            "content" => fake()->text(),
            "author" => 2,
        ]);

        Notification::create([
            "title" => "Prévision météos",
            "content" => fake()->text(),
            "author" => 2,
        ]);

        Notification::create([
            "title" => "Chute de l'éthéreum",
            "content" => fake()->text(),
            "author" => 2,
        ]);

        Notification::create([
            "title" => "COP 24, les enjeux pour l'environnement",
            "content" => fake()->text(),
            "author" => 2,
        ]);




    }
}
