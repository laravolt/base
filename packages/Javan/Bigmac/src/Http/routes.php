<?php

$router->get('/', ['uses' => 'FrontendController@home', 'as' => 'frontend.home']);
$router->get('galeri', ['uses' => 'FrontendController@gallery', 'as' => 'frontend.gallery']);
$router->get('mekanisme', ['uses' => 'FrontendController@mechanism', 'as' => 'frontend.mechanism']);
$router->get('hadiah', ['uses' => 'FrontendController@prize', 'as' => 'frontend.prize']);
