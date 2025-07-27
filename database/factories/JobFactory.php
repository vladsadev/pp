<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['50.000 Bs', '35.000 Bs', '12.000 Bs']),
            'location' => fake()->randomElement(['Remote', 'USA', 'Bolivia']),
            'schedule' => fake()->randomElement(['Full Time', 'Partial']),
            'url'=> fake()->url,
            'featured'=> false
        ];
    }
}
