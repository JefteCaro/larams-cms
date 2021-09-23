<?php

namespace Jefte\Larams\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Input\InputArgument;

class CreateLaramsModule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larams:make {--module=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates New Larams Module';

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
        if($this->option('module'))
        {
            return $this->handleModule();
        }
        else
        {
            return $this->error('No Module Specified. Include --module flag');
        }
    }

    public function handleModule()
    {
        // Artisan::command('larams:model ' . $this->option('module'), function($command) {
        //     dd($command);
        // });
    }

    public function getFlags()
    {
        if((bool) $this->option('module'))
        {
            return $this->info($this->option('module'));
        }
    }
}
