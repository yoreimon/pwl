<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => fake("id_ID")->sentence(),
            'author' => fake("id_ID")->name(),
            'likes' => fake()->randomDigit,
            'dislikes' => fake()->randomDigit,
        ];
    }
}