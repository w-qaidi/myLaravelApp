<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => $this->faker->numerify('OR####'),
            'item' => $this->faker->randomElement($array = array ('iPhone 6 Plus','Samsung Smart TV','Call of Duty IV')),
            'status' => $this->faker->randomElement($array = array ('Shipped','Pending','Delivered', 'Processing')),
            'popularity' => $this->faker->numerify('##,##,##,##,##'),
        ];
    }
}
