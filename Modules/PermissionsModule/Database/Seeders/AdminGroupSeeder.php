<?php

namespace Modules\PermissionsModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\PermissionsModule\App\Model\AdminGroup;

class AdminGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminGroup::factory(50)->create();
    }
}
