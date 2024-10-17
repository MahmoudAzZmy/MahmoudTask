<?php

namespace Modules\PermissionsModule\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\PermissionsModule\App\Model\AdminGroup;

class AdminGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = AdminGroup::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}

