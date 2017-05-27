<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Widgets;
use App\Services\CommonServices;

class CustomProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
          $this->app->singleton('widgets', function ($app) {
            return new Widgets();
        });

        $this->app->singleton('common', function ($app) {
            return new CommonServices();
        });
    }
}
