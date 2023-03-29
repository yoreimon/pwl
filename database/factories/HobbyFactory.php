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
<<<<<<< HEAD
            'name' => fake('id_ID')->name,
            'hobby' => fake()->sentence,
=======
            'jenis' => fake()->randomElement(['olahraga', 'musik']),
            'hobi' => fake()->randomElement(['basket', 'bermain gitar']),
>>>>>>> c1d21601dda88c0b870af0f59a4105e49cbf11a5
        ];
    }
}