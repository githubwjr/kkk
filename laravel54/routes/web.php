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
    return view('index.index');
});
Route::get('/login', function () {
    return view('index.login');
});
Route::get('/register',function(){
	return view('index.register');
});
// 路由的配置
route::get('index/index','IndexController@index');
route::get('index/show','IndexController@show');
route::any("index/category",'IndexController@category');
route::get('login_do','IndexController@login_do');
route::get("regin",'IndexController@regin');


