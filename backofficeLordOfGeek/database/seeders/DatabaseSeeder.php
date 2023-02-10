<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use App\Models\Jeu;
use App\Models\Tag;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    Jeu::factory(10)->create();
    User::factory(10)->create();
    Categorie::factory(10)->create();
    Tag::factory(50)->create();
    }
    
}
