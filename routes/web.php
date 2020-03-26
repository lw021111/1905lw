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
//注册
Route::any('/index/register','IndexController@register');
Route::any('/index/register_do','IndexController@register_do');
//登陆
Route::any('/index/ma','IndexController@ma');
Route::any('/index/login','IndexController@login');
Route::any('/index/login_do','IndexController@login_do');
//首页
Route::any('/index/index','IndexController@index');

Route::any('/index/sendSms','IndexController@sendSms');