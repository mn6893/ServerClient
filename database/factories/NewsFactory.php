<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(),
            'slug' => fake()->slug(),
            'image' => $this->faker->imageUrl(640,480),
            'description' => fake()->paragraph(),
            'createdby' => 'Admin',
            'updatedby' => 'Admin',
        ];
    }
}
