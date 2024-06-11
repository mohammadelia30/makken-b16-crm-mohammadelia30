<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'price' => fake()->numberBetween(10,2000),
            'color' => fake()->hexColor(),
            'status' => fake()->randomElement(['موجود','ناموجود','به زودی']),
            'number' => fake()->numberBetween(0,1000),
            'comment' => fake()->paragraph(),
        ];
    }
}
