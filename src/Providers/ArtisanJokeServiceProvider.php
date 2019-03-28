<?php

namespace G11v8a\Providers;

use Illuminate\Support\ServiceProvider;

class ArtisanJokeServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.g11v8a.artisan-joke', function ($app) {
            return $app['G11v8a\Commands\JokeCommand'];
        });

        $this->commands('command.g11v8a.artisan-joke');
    }
}
