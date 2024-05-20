<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Animal;

class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Animal::class;

    public function definition()
    {
        return [
            'species' => $this->faker->sentence(),
            'scientific_name' => $this->faker->text($maxNbChars = 200),
            'limit_age' => $this->faker->numberBetween($min = 1, $max = 100),
            'description' => $this->faker->paragraph(),
        ];
    }
}
