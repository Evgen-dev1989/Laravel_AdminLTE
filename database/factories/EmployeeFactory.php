<?php

namespace Database\Factories;
use App\Models\Employee;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'Name' => $this->faker->Name,
            'Employment date' => $this->faker->dateTime,
            'Phone nubmer' => $this->faker->unique()->phoneNumber,
            'Email' => $this->faker->unique()->safeEmail,
            'Salary' => $this->faker->randomDigit,
        ];
    }
}



