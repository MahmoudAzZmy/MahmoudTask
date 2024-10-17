<?php

namespace Modules\Spatie\Database\Seeders;

use Illuminate\Database\Seeder;

class SpatieDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        $this->call([
            PermissionsSeeder::class,
            RoleSeeder::class,
        ]);
    }
}
