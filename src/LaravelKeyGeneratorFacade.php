<?php

namespace Assumilhig\LaravelKeyGenerator;

use Illuminate\Support\Facades\Facade;

class LaravelKeyGeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-key-generator';
    }
}
