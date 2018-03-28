<?php

Route::get('/activate', 'HomeController@activate');

Route::get('/', 'HomeController@index');

Route::get('/blogs', 'HomeController@blogs');

Route::get('/blog', 'HomeController@blog');

Route::get('/gallery', 'HomeController@gallery');

Route::get('/about', 'HomeController@about');

Route::get('/contact', 'HomeController@contact');

Route::get('/user/{username}', 'HomeController@user');

Route::get('/pwdReset/{id}', 'UserController@user');

Route::get('/register', 'HomeController@register');

Route::post('/register', 'RegisterController@index');

Route::get('/login', 'HomeController@login');

Route::get('/signin', 'LoginController@index');

Route::get('/logout', 'LoginController@logout');

Route::get('/forgot', 'HomeController@forgot');

Route::post('/forgot', 'LoginController@forgot');

Route::get('/{username}', 'LoginController@forgot_2');

Route::post('/activate', 'RegisterController@activate');

Route::get('/images/add', 'HomeController@images');

Route::post('/upload_gallery', 'UploadController@gallery');

Route::get('/images/delete/{id}', 'UploadController@galleryDelete');
