<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'make' => fake()->name(),
            'model' => fake()->title(),
            'year_born' => fake()->year(),
            'mileage' => fake()->randomNumber(),
            'colour' => fake()->colorName(),

        ];
    }
}
