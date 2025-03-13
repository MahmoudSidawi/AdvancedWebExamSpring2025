<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
   
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Course::create([
                'name' => $faker->sentence(10), 
                'description' => $faker->paragraph,
            ]);
        }
    }
}
