<?php

namespace Assumilhig\LaravelKeyGenerator\Tests;

use Assumilhig\LaravelKeyGenerator\LaravelKeyGeneratorServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelKeyGeneratorServiceProvider::class
        ];
    }
}