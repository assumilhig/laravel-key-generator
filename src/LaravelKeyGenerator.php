<?php

namespace Assumilhig\LaravelKeyGenerator;

use Illuminate\Support\Str;

class LaravelKeyGenerator
{

    /**
     * Generate a new key
     *
     * @param string $prefix
     * @param int|null $length
     *
     * @return string
     */
    public static function generate(string $prefix, int|null $length = null): string
    {
        if (is_null($length)) {
            $length = config('laravel-key-generator.length');
        }

        $string = Str::random($length);

        return "{$prefix}{$string}";
    }
}
