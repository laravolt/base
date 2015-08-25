<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('frontend.home.index');
//});
//
//Route::get('home', function () {
//    return redirect('/');
//});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::group(['namespace' => 'Frontend'], function($router){
    Route::resource('posts', 'PostController');
});

Route::group(['namespace' => 'Frontend', 'prefix' => '', 'middleware' => ''], function($router){
    $router->resource('users', 'UserController');
});

// BACKEND ROUTES
Route::group(['namespace' => 'My', 'prefix' => 'my', 'middleware' => 'auth'], function($router){
    $router->resource('profile', 'ProfileController');
    $router->resource('account', 'AccountController');
    $router->resource('email', 'EmailController');
    $router->resource('log', 'LogController');
});

// ADMIN ROUTES
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function($router){
    $router->resource('home', 'HomeController');
    $router->resource('reports', 'ReportController');
    $router->resource('users', 'UserController');
    $router->resource('settings', 'SettingController');
});
