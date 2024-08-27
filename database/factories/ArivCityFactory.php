<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ArivCityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'arname'=>$this->faker->word,
            'enname'=>$this->faker->word
        ];
    }
}
