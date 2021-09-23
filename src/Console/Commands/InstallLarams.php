<?php

namespace Jefte\Larams\Console\Commands;

use Illuminate\Console\Command;

class InstallLarams extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larams:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installs new Larams CMS Instance';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return $this->error('We\'re Working on this feature');
    }
}
