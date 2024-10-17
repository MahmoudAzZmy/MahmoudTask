<?php

namespace Modules\PermissionsModule\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\PermissionsModule\App\Model\AdminGroup;
use Modules\PermissionsModule\App\Model\AdminGroupRole;

class AdminGroupRoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = AdminGroupRole::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'resource' => $this->faker->name(),
            'admin_group_id' => AdminGroup::pluck('id')->random(),
            'create' => $this->faker->randomElement(['yes', 'no']),
            'update' => $this->faker->randomElement(['yes', 'no']),
            'delete' => $this->faker->randomElement(['yes', 'no']),
            'force_delete' => $this->faker->randomElement(['yes', 'no']),
            'restore' => $this->faker->randomElement(['yes', 'no']),
            'show' => $this->faker->randomElement(['yes', 'no']),
        ];
    }
}
