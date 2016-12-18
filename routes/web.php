<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('Login.Login');
});
Route::get('/home', function () {
        return view('home.dashboard');
});
Route::get('/ScrumBoard', function () {
    return view('ScrumBoard.ScrumBoard');
});
Route::get('/RecordarContrasena', function () {
    return view('RecordarContrasena.RecordarContrasena');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

