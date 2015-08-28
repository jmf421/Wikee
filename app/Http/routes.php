<?php

Route::get('/', 'PagesController@index');

Route::get('about', 'PagesController@about');

Route::get('auth/login', 'UserController@login');

Route::get('contact', 'PagesController@contact');

Route::get('auth/signup', 'UserController@signup');

Route::get('pricing', 'PagesController@pricing');

Route::get('articles', 'ArticlesController@index');

Route::get('articles/{id}', 'ArticlesController@show');


Route::controller('admin/create', 'UserController');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('admin/dashboard', [
    'as' => 'dashboard', 'uses' => 'UserController@dashboard'
]);
