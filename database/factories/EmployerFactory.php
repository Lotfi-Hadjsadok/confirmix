<?php

namespace Database\Factories;

use App\Models\User;
use App\Enums\UserRole;
use App\Models\Employer;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employer::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'user_id' => User::factory()->create(
                ['role' => UserRole::EMPLOYER->value]
            )
        ];
    }
}
