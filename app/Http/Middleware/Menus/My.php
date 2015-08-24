<?php

namespace App\Http\Middleware\Menus;

use Caffeinated\Menus\Facades\Menu;
use Closure;

class My
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Menu::make('menus.my', function($menu) {
            $menu->add(trans('menus.my.profile'), route('my.profile.index'))->active('my/profile/*');
            $menu->add(trans('menus.my.account'), route('my.account.index'))->active('my/account/*');
            $menu->add(trans('menus.my.email'), route('my.email.index'))->active('my/email/*');
            $menu->add(trans('menus.my.log'), route('my.log.index'))->active('my/log/*');
        });

        return $next($request);
    }
}
