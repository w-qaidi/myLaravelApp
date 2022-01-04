<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecapFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $revenue = $this->faker->randomFloat(2, 15000, 30000);
        $cost = $this->faker->randomFloat(2, 10000, 20000);
        $profit = $revenue - $cost; 

        return [
            'product' => $this->faker->numberBetween(1, 200),
            'purchase' => $this->faker->numberBetween(1, 400),
            'premium' => $this->faker->numberBetween(1, 800),
            'inquiries' => $this->faker->numberBetween(1, 500),
            'revenue' => $revenue,
            'cost' => $cost,
            'profit' => $profit,
            'completions' => $this->faker->numberBetween(1000, 5000),
        ];
    }
}
