<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Position;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Position>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           // 'position' => $this->faker->position, 'created_at' => now(), 'updated_at' => now(), 'admin_created_id' => now(), 'admin_updated_id' => now()
        ];
    }
}



