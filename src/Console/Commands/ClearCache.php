<?php

namespace Jefte\Larams\Console\Commands;

use Illuminate\Console\Command;
use Jefte\Larams\Facades\PageCache;

class ClearCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larams:clear-cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears Cached Pages';

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
        PageCache::clear();
        return $this->info('Cached Pages Cleared');
    }
}
