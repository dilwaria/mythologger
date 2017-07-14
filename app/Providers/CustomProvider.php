<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Widgets;
use App\Services\CommonServices;
use App\Services\UserService;
use App\Services\BlogService;
use App\Services\AnswerService;

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

        $this->app->singleton('userService', function ($app) {
            return new UserService();
        });

        $this->app->singleton('blogService', function ($app) {
            return new BlogService();
        });

        $this->app->singleton('common', function ($app) {
            return new CommonServices();
        });

        $this->app->singleton('answerService', function ($app) {
            return new AnswerService();
        });
    }
}
