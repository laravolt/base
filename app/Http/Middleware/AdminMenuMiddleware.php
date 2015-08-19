<?php

namespace App\Http\Middleware;

use Caffeinated\Menus\Facades\Menu;
use Closure;

class AdminMenuMiddleware
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
        Menu::make('admin', function($menu) {
            $menu->add(trans('admin.menu.home'), route('admin.home.index'))->data(['icon' => 'home']);
            $menu->add(trans('admin.menu.reports'), route('admin.reports.index'))->data(['icon' => 'bar chart']);
            $menu->add(trans('admin.menu.users'), route('admin.users.index'))->data(['icon' => 'user']);
            $menu->add(trans('admin.menu.settings'), route('admin.settings.index'))->data(['icon' => 'setting']);
            $menu->add(trans('admin.menu.logout'), url('auth/logout'))->data(['icon' => 'sign out']);
        });

        return $next($request);
    }
}
