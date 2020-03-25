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
    return view('index/index');
});
//登陆
Route::any('/index/login','IndexController@login');
Route::any('/index/login_do','IndexController@login_do');
Route::any('/index/index','IndexController@index');