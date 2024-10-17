<?php

namespace Modules\PermissionsModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\PermissionsModule\App\Model\AdminGroupRole;

class AdminGroupRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminGroupRole::factory(50)->create();
    }
}
