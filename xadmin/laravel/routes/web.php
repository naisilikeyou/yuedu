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
//后台
Route::group(['prefix'=>'admin'],function(){
    //登录页面
    Route::any('/index','Admin\\LoginController@index');
    //展示添加轮播图页面
    Route::any('/indexpicture','Admin\\NovelController@indexpicture');
    //添加图片
    Route::any('/uploads','Admin\\NovelController@uploads');
    //添加小说
    Route::any('/addnovel','Admin\\NovelController@addnovel');
    //用户个人中心
    Route::any('/uindex','Admin\\UserController@uindex');
});
//前台登录页面
Route::group(['prefix'=>'index'],function(){
    //登录页面
    Route::any('/index','Index\\LoginController@index');
    //首页
    Route::any('/nindex','Index\\NovelController@nindex');
});