<?php

namespace DevinGray\LaraTeams;

use Illuminate\Support\ServiceProvider;

/**
 * Class LaraTeamsServiceProvider
 * @package DevinGray\LaraTeams
 */
class LaraTeamsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/Config/config.php' => config_path('larateams.php')]);

        if (! class_exists('TeamworkSetupTables')) {

            // Publish the migration
            $timestamp = date('Y_m_d_His', time());
            $this->publishes([ __DIR__ . '/Migrations/2017_08_11_171401_create_larateams_table.php' => database_path('migrations/' . $timestamp . '_create_larateams_table.php'),], 'migrations');
        }

        if ($this->app->runningInConsole()) {
            $this->commands([
                \DevinGray\LaraTeams\Commands\LaraTeamsCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/config.php', 'larateams');
    }
}
