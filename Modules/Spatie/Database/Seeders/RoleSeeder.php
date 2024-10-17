<?php

namespace Modules\Spatie\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Spatie\App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory(50)->create();
    }
}
