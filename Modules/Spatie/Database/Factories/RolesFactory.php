<?php

namespace Modules\Spatie\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Spatie\App\Models\Role;

class RolesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Role::class;

    /**
     * Define the model's default state.
     */

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            'guard_name' => $this->faker->unique()->word(),
        ];
    }
}
