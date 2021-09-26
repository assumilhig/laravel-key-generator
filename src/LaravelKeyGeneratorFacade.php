<?php

namespace Assumilhig\LaravelKeyGenerator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Assumilhig\LaravelKeyGenerator\Skeleton\SkeletonClass
 */
class LaravelKeyGeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-key-generator';
    }
}
