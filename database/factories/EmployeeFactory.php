<?php

namespace Database\Factories;

use App\Models\User;
use App\Enums\UserRole;
use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'user_id' => User::factory()->create(
                ['role' => UserRole::EMPLOYEE->value]
            )
        ];
    }
}
