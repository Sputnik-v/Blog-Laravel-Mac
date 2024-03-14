<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(40),
            'description' => $this->faker->text(100),
            'image' => $this->faker->imageUrl(),
            'user_id' => $this->faker->biasedNumberBetween(1, 10),
            'category_id' => $this->faker->biasedNumberBetween(1, 6),
        ];
    }
}
