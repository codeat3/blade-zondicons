<?php

declare(strict_types=1);

namespace BladeUI\Zondicons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeZondiconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-zondicons', []);

            $factory->add('zondicons', array_merge(['path' => __DIR__ . '/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/blade-zondicons.php', 'blade-zondicons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-zondicons'),
            ], 'blade-zondicons');

            $this->publishes([
                __DIR__ . '/../config/blade-zondicons.php' => $this->app->configPath('blade-zondicons.php'),
            ], 'blade-zondicons-config');
        }
    }
}
