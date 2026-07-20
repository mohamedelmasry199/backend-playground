<?php

namespace Database\Factories;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'starting_date' => $this->faker->date(),
            'ending_date' => $this->faker->date(),
            'price' => $this->faker->numberBetween(100, 1000),
        ];
    }
}
