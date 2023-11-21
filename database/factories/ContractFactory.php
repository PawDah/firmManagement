<?php

namespace Database\Factories;

use App\Models\Contract;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => Employee::factory(),
            'contract_type_id' => fake()->numberBetween(1,4),
            'contract_details' => Str::random(400),
            'payment_amount' => fake()->randomNumber(4),
            'start_date' => fake()->dateTimeBetween('-3 years'),
            'end_date'=> fake()->dateTimeBetween('+2 weeks','+2 years'),
        ];
    }
}
