<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sender_name' => fake()->name(),
            'receiver' => fake()->name(),
            'code' => fake()->unique()->numberBetween(0,99999999),
            'date' => fake()->date(),
            'time' => fake()->time(),
            'user_id' =>User::factory(),
            'comment' => fake()->text(),
        ];
    }
}
