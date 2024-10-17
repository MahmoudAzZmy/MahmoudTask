<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class initializeDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:initialize-database';
    protected $description = 'Run all seeders from multiple modules';

    public function handle()
    {
        $commands = [
            'php artisan migrate:fresh',
            'php artisan module:seed PermissionsModule',
            'php artisan module:seed Spatie',
            'php artisan module:seed UsersModule',
        ];

        foreach ($commands as $command) {
            shell_exec($command);
        }

        $this->info('All migrations & seeders have been executed.');
    }
}
