<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Theme;
use Orchestra\View\Bootstrap\LoadCurrentTheme;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        (new LoadCurrentTheme())->bootstrap($this->app);
        Theme::setTheme('default');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
