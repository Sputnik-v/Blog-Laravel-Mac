<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->text(300),
            'user_id' => $this->faker->biasedNumberBetween(1, 10),
            'post_id' => $this->faker->biasedNumberBetween(1, 10),

        ];
    }
}
