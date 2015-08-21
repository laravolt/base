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
            $menu->add(trans('menus.admin.home'), route('admin.home.index'))->data(['icon' => 'home']);
            $menu->add(trans('menus.admin.reports'), route('admin.reports.index'))->data(['icon' => 'bar chart']);
            $menu->add(trans('menus.admin.users'), route('admin.users.index'))->data(['icon' => 'user'])->active('admin/users*');
            $menu->add(trans('menus.admin.settings'), route('admin.settings.index'))->data(['icon' => 'setting']);
        });

        return $next($request);
    }
}
