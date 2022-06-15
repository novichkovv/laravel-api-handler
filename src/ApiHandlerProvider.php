<?php

namespace Novichkovv\LaravelApiHandler;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\ServiceProvider;

class ApiHandlerProvider extends ServiceProvider
{
    public function register() {}

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/api_handler.php' => config_path('api_handler.php'),
        ]);
        $this->mergeConfigFrom(
            __DIR__.'/../config/api_handler.php', 'api_handler'
        );
        if(config('api_handler.handle.auto_discover') === true) {
            $this->app->bind(ExceptionHandler::class, ApiHandler::class);
        }
    }
}
