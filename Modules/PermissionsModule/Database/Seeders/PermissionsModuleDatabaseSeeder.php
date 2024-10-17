<?php

namespace Modules\PermissionsModule\Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsModuleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            AdminGroupSeeder::class,
            AdminGroupRoleSeeder::class
        ]);
    }
}
