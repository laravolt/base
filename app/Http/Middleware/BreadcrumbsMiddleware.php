<?php

namespace App\Http\Middleware;

use Closure;
use Breadcrumbs;

class BreadcrumbsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Breadcrumbs::register('home', function ($breadcrumbs) {
            $breadcrumbs->push('Home', route('admin.home.index'));
        });

        Breadcrumbs::register('admin.users.index', function ($breadcrumbs) {
            $breadcrumbs->parent('home');
            $breadcrumbs->push(trans('entities.users'), route('admin.users.index'));
        });

        Breadcrumbs::register('admin.users.edit', function ($breadcrumbs, $user) {
            $breadcrumbs->parent('admin.users.index');
            $breadcrumbs->push($user->name);
        });

        Breadcrumbs::register('admin.users.create', function ($breadcrumbs) {
            $breadcrumbs->parent('admin.users.index');
            $breadcrumbs->push(trans('actions.add'));
        });


        return $next($request);
    }
}
