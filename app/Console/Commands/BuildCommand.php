<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BuildCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'build';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Build the application';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Aquí puedes agregar la lógica de tu comando "build"
        $this->info('Building the application...');

        // Agrega aquí tu lógica de construcción

        $this->info('Application built successfully!');

        return 0;
    }
}
