<?php

namespace Assumilhig\LaravelKeyGenerator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class LaravelKeyGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('laravel-config.php'),
            ], 'config');
        }

        Str::macro('key', fn(string $prefix, int|null $length = null) => LaravelKeyGenerator::generate($prefix, $length));
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'laravel-key-generator');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-key-generator', function () {
            return new LaravelKeyGenerator;
        });
    }
}
