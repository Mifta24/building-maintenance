<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
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
            'name' => $this->faker->company(),
            'description' => $this->faker->sentence(10, true),
        ];
    }
}
