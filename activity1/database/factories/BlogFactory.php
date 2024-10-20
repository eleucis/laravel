<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return[
            'title' => Fake()->sentence(),
            'description' => Fake()->paragraph(),
            'status' => rand(0,1),
            'category_id'=> rand(1,3),


        ];
    }
}
