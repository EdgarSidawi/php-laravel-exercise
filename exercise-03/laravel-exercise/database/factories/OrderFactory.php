<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'customer_id' => $this->faker->numberBetween(1, 300),
            'employee_id' => $this->faker->numberBetween(1, 300),
            'freight' => $this->faker->word(),
            'shipName' => $this->faker->word(),
            'shipAddress' => $this->faker->address(),
        ];
    }
}
