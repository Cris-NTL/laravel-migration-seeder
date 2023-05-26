<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Train::create([
                'company' => $faker->company,
                'location_start' => $faker->city,
                'location_end' => $faker->city,
                'start_trip' => $faker->dateTimeBetween('-1 day', '+1 day')->format('Y-m-d H:i:s'),
                'end_trip' => $faker->dateTimeBetween('+2 days', '+10 days')->format('Y-m-d H:i:s'),
                'train_code' => $faker->numerify('TR####'),
                'train_name' => $faker->words(2, true),
                'train_category' => $faker->randomElement(['freight', 'passenger', 'mixed']),
                'train_type' => $faker->randomElement(['intercity', 'regional', 'high-speed']),
                'number_carriages' => $faker->numberBetween(1, 15),
                'in_time' => $faker->boolean(70),
                'delayed' => $faker->boolean(30),
                'cancelled' => $faker->boolean(10),
            ]);
        }
    }
}
