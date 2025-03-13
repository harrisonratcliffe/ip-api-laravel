<?php

namespace Harrisonratcliffe\IpApiLaravel\Tests;

use Harrisonratcliffe\IpApiLaravel\IpApiLaravelServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{

    protected function getPackageProviders($app): array
    {
        return [
            IpApiLaravelServiceProvider::class
        ];
    }
}
