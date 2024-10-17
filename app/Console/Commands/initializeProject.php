<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class initializeProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:initialize-project';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run This command to initialize this project easly';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $commands = [
            'php artisna key:generate',
            'php artisan jwt:secret',
        ];

        foreach ($commands as $command) {
            shell_exec($command);
        }

        $this->info('All Required dependencies installs');
    }
}
