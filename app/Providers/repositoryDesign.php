<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class repositoryDesign extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Http\Interfaces\SliderInterface',
            'App\Http\Repositories\SliderRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
