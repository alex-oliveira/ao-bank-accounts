<?php

namespace AoBankAccounts;

use Illuminate\Support\ServiceProvider as LaraServiceProvider;

class ServiceProvider extends LaraServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Utils/Migrations' => database_path('migrations'),
            __DIR__ . '/Utils/Seeders' => database_path('seeds')
        ]);
    }

    public function register()
    {
        $this->app->singleton('AoBankAccounts', function ($app) {
            return new \AoBankAccounts\Utils\Tools();
        });

        require_once(__DIR__ . '/Utils/Helpers.php');
    }

}