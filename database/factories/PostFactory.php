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
            //
            'name' =>$this->faker->sentence(),
            'free' => rand(1,0),

            'course_id' => rand(1,10),
            'category_id' => rand(1,3)
        ];
    }
}
