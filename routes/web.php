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
	//return response('This route is supposed to be working.', 301);
});

Route::get('route', function () {
	//return view('newRoute');
	return response('This route is supposed to be working.', 301);
});

