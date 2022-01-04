<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cpu_traffic' => $this->faker->numberBetween(1, 99),
            'likes' => $this->faker->numberBetween($min = 1, $max = 9999),
            'sales' => $this->faker->numberBetween($min = 1, $max = 999),
            'new_members' => $this->faker->numberBetween($min = 1, $max = 999),
        ];
    }
}
