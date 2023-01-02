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
            //
        ];
    }

}


$factory->define(Employee::class, function (Faker $faker) {
    return [
        'Name' => $faker->Name,
        'Position' => $faker->Position,
        'Employment date' => $faker->EmploymentDate,
        'Phone nubmer' => $faker->unique()->PhoneNubmer,
        'Email' => $faker->unique()->safeEmail,
        'Salary' => $faker->Salary,
        'created_at' => now(),
        'updated_at' => now(),
        'admin_created_id' => now(),
        'admin_updated_id' => now(),
    ];
});
