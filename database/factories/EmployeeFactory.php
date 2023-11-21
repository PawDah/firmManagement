<?php

namespace Database\Factories;

use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'phone_number' => fake()->randomNumber(9),
            'email' => fake()->unique()->safeEmail(),
            'image_path' => 'https://randomuser.me/api/portraits/men/'.fake()->numberBetween(1,100).'.jpg',
        ];
    }
}
