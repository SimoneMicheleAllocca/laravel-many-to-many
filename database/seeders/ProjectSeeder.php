<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Project::create([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph,
                'slug' => $faker->unique()->slug,
            ]);
        }
    }
}
