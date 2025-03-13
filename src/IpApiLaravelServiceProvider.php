<?php

namespace Harrisonratcliffe\IpApiLaravel;

use Harrisonratcliffe\IpApiLaravel\Console\TestConnection;
use Illuminate\Support\ServiceProvider;

class IpApiLaravelServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/ip-api.php' => config_path('ip-api.php'),
        ], 'ip-api-config');
    }

    public function register(): void
    {
        $this->commands([
            TestConnection::class,
        ]);
    }
}
