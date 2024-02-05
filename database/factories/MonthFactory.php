<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Month>
 */
class MonthFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'years_id' => $this->faker->randomElement([1,2,3,4,5]),
            'number' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12]),
        ];
    }
}
