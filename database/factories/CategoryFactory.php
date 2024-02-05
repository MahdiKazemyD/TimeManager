<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1,1000),
            'parent_id' => $this->faker->randomElement([null, rand(1,10)]),
            'name' => $this->faker->title(),
            'time' => rand(10,300),
            'color' => $this->faker->colorName(),
        ];
    }
}
