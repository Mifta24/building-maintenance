<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
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
            'headline' => $this->faker->sentence(6, true),
            'lead' => $this->faker->sentence(12, true),
            'body' => $this->faker->paragraphs(3, true),
        ];
    }
}
