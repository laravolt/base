<?php

Menu::create('admin', function(\Pingpong\Menus\MenuBuilder $menu)
{
    $menu->setView('admin.elements.sidebar');
    $menu->add(['route' => 'admin.users.index', 'title' => trans('admin.menu.home'), 'icon' => 'home']);
    $menu->route('admin.users.index', trans('admin.menu.reports'));
    $menu->route('admin.users.index', trans('admin.menu.users'));
    $menu->route('admin.users.index', trans('admin.menu.settings'));
});
