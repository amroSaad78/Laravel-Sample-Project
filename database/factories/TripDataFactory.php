<?php

namespace Database\Factories;

use App\Models\ArivCity;
use App\Models\CarType;
use App\Models\DepCity;
use App\Models\TripType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TripData>
 */
class TripDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dep_cities_id' => DepCity::factory(),
            'ariv_cities_id' => ArivCity::factory(),
            'trip_types_id' => TripType::factory(),
            'car_types_id' => CarType::factory(),
            'price' =>$this->faker->randomFloat(2,1000,10000)
        ];
    }
}
