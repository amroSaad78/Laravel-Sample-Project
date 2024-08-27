<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarType>
 */
class CarTypeFactory extends Factory
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
            'enname'=>$this->faker->word,
            'seat'=>$this->faker->numberBetween(0,10),
            'bag'=>$this->faker->numberBetween(0,10),
            'image'=>$this->faker->word,
        ];
    }
}
