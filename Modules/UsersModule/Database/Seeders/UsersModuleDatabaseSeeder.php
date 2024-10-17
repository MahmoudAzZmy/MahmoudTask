<?php

namespace Modules\UsersModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\UsersModule\App\Http\Model\User;

class UsersModuleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(50)->create();
    }
}
