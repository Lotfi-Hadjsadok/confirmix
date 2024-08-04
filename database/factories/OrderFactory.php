<?php

namespace Database\Factories;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Employer;
use App\Models\Order;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'product' => $this->faker->word(),
            'quantity' => $this->faker->numberBetween(1, 50),
            'shipping_method' => $this->faker->word(),
            'shipping_price' => $this->faker->numberBetween(400, 1000),
            'total' => $this->faker->numberBetween(1000, 10000),
            'currency' => 'Dz',
            'status' => $this->faker->randomElement(Status::cases())->value,
            'client_id' => Client::factory(),
            'employee_id' => 3,
            'employer_id' => Employer::factory(),
        ];
    }
}
