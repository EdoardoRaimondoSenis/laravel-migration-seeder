<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company;
            $newTrain->departure_station = $faker->city;
            $newTrain->arrival_station = $faker->city;
            $newTrain->departure_time = $faker->dateTime;
            $newTrain->arrival_time = $faker->dateTime;
            $newTrain->train_code = $faker->randomNumber(5, true);
            $newTrain->number_of_carriages = $faker->numberBetween(5, 20);
            $newTrain->in_time = $faker->boolean;
            $newTrain->cancelled = $faker->boolean;
            $newTrain->save();
        }
    }
}
