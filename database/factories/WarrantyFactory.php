<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Warranty>
 */
class WarrantyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this->faker->name(),
            'length' => $this->faker->randomDigit(),
            'started_at' => $this->faker->date(),
            'ended_at' => $this->faker->date(),
            'product_id' => Product::factory()
        ];
    }
}
