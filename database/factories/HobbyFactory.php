<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hobby>
 */
class HobbyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jenis' => fake()->randomElement(['olahraga', 'musik']),
            'hobi' => fake()->randomElement(['basket', 'bermain gitar']),
        ];
    }
}