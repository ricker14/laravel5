<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('newRoute', function () {
	return view('newRoute');
});

Route::get('brokenRoute', function () {
	return response('This route is supposed to be broken.', 426);
	//return view('brokenRoute');
});
