<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'https://source.unsplash.com/random/800x600?' . $this->faker->word(),
            'name' => $this->faker->jobTitle(),
            'description' => $this->faker->sentence(12, true),
        ];
    }
}
