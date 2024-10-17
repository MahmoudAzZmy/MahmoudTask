<?php

namespace Modules\UsersModule\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\UsersModule\App\Http\Model\User;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'account_type' => $this->faker->randomElement(['admin', 'user']),
            'mobile'    => $this->faker->phoneNumber()
        ];
    }
}
