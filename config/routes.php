<?php

$route->get('/', 'App\Controllers\HomeController@index');

$route->get('/products', 'App\Controllers\ProductController@index');
$route->get('/product/create', 'App\Controllers\ProductController@create');
$route->get('/product/{id:\d+}', 'App\Controllers\ProductController@show');
$route->get('/product/{id:\d+}/edit', 'App\Controllers\ProductController@edit');

$route->post('/product', 'App\Controllers\ProductController@store');
$route->post('/product/{id:\d+}/update', 'App\Controllers\ProductController@update');
$route->get('/product/{id:\d+}/delete', 'App\Controllers\ProductController@delete');