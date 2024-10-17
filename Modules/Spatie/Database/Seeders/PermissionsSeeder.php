<?php

namespace Modules\Spatie\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Spatie\App\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::factory(50)->create();
    }
}
