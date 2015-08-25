<?php

namespace Javan\Bigmac;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class BigmacServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupRoutes($this->app->router);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Javan\Bigmac\Http\Controllers'], function($router)
        {
            require __DIR__.'/Http/routes.php';
        });
    }

}
