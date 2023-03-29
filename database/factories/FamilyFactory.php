<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Family>
 */
class FamilyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'relasi' => fake()->randomElement(['ayah', 'ibu', 'saudara']),
            'nama' => fake()->name,
            'umur' => fake()->numberBetween(1, 50),
        ];
    }
}