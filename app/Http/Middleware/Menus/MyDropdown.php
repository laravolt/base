<?php

namespace App\Http\Middleware\Menus;

use Caffeinated\Menus\Facades\Menu;
use Closure;

class MyDropdown
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
        Menu::make('menus.my.dropdown', function($menu) {
            $user = auth()->user();
            $menu->add(trans('menus.my.profile'), route('users', $user->id));
        });

        return $next($request);
    }
}
