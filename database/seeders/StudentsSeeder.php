<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use Faker\Factory as Faker;

class StudentsSeeder extends Seeder
{
   
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            Course::create([
                'name' => $faker->sentence(10), 
                'age' => $faker->paragraph,
            ]);
        }
    }
}
