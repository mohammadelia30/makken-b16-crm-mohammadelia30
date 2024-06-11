<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Warranty;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factor>
 */
class FactorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            "warranty_id" =>Warranty::factory(),
            'total_price' => $this->faker->randomNumber(),
            'total_products' => $this->faker->numberBetween(1,10),
        ];
    }
}
