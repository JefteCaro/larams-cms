<?php

namespace Jefte\Larams;

use Illuminate\Support\ServiceProvider;
use Jefte\Larams\Console\Commands\CreateLaramsModel;
use Jefte\Larams\Console\Commands\CreateLaramsModule;
use Jefte\Larams\Console\Commands\InstallLarams;
use Jefte\Larams\Console\Commands\ClearCache;

class LaramsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerPublishables();
        $this->registerCommands();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function registerPublishables()
    {
        $this->registerConfig();
        $this->registerMigrations();
    }

    public function registerConfig()
    {
        $this->publishes([
            $this->resourcePath('config/larams.php') => config_path('larams.php')
        ], 'larams-config');
    }

    public function registerMigrations()
    {

        $publishes = [];

        foreach(glob($this->resourcePath('migrations') . '/*', GLOB_NOSORT) as $file)
        {
            $publishes[$file] = database_path('migrations/' . date('Y_m_d_His') . '_' .  basename($file));
        }

        $this->publishes($publishes, 'larams-migration');
    }

    public function registerCommands()
    {
        $this->commands([
            InstallLarams::class,
            CreateLaramsModel::class,
            CreateLaramsModule::class,
            ClearCache::class,
        ]);
    }

    public function resourcePath($res)
    {
        return __DIR__ . '/resources/' . $res;
    }
}
