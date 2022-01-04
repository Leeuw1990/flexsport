<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Schema;
use App\Models\Workout;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Workout::create(["category_id" => "1", "name" => "Bench-press"]);
        Workout::create(["category_id" => "2", "name" => "Bent over row"]);
        Workout::create(["category_id" => "3", "name" => "Squats"]);
        Workout::create(["category_id" => "4", "name" => "Shoulder press"]);
        Workout::create(["category_id" => "5", "name" => "Dumbell curls"]);
        Workout::create(["category_id" => "6", "name" => "Rope extension"]);
        Workout::create(["category_id" => "7", "name" => "Sit-ups"]);

////////////////////////////////////////////////////////////////////////////
        Category::create(["name" => "chest"]);
        Category::create(["name" => "back"]);
        Category::create(["name" => "legs"]);
        Category::create(["name" => "shoulders"]);
        Category::create(["name" => "biceps"]);
        Category::create(["name" => "triceps"]);
        Category::create(["name" => "abs"]);
    }
}
