<?php

namespace Riyastir\Apigenerator;

use Illuminate\Support\ServiceProvider;
use Riyastir\Apigenerator\Commands\GenerateApiCommand;

class ApiGeneratorProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateApiCommand::class,
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

    }
}
