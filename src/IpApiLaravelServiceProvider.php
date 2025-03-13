<?php

namespace Harrisonratcliffe\IpApiLaravel;

use Harrisonratcliffe\IpApiLaravel\Console\TestConnection;
use Illuminate\Support\ServiceProvider;

class IpApiLaravelServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/ip-api-laravel.php' => config_path('ip-api-laravel.php'),
        ], 'ip-api-laravel-config');
    }

    public function register(): void
    {
        $this->commands([
            TestConnection::class,
        ]);
    }
}
