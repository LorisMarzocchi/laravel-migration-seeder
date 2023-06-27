<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     // con dati in config
    //     $trains = config('trains');

    //     foreach ($trains as $arrTrain) {

    //         Train::create($arrTrain);
    //     }
    // }
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            Train::create([
                'company' => $faker->company(),
                'departure_station' => $faker->city(),
                'arrival_station' => $faker->city(),
                'departure_time' => $faker->time(),
                'arrival_date' => $faker->date(),
                'train_code' => $faker->bothify('#??-###'),
                'carriages' => rand(1, 20),
                'in_time' => $faker->boolean(),
                'deleted' => $faker->boolean(),
            ]);
        }

    }
}
