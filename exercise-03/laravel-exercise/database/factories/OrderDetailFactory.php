<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'order_id' => Order::all()->random()->id,
            'product_id' => $this->faker->numberBetween(1, 200),
            'unitPrice' => $this->faker->numberBetween(10, 99),
            'quantity' => $this->faker->numberBetween(10, 50),
            'discount' => $this->faker->numberBetween(1, 5),
        ];
    }
}
