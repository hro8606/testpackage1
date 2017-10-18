<?php

namespace Hrtest1\Timezonestest;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/hrtest1/timezones'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/web.php';
        $this->app->make('Hrtest1\Timezonestest\TimezonesController');
    }
}






