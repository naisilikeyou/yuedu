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

/*
 * 后台首页
 */
Route::prefix('admin')->group(function(){
    //后台首页
    Route::get('index','Admin\IndexController@index');
    Route::get('welcome','Admin\IndexController@welcome');

});

//作者
Route::prefix('author')->group(function(){
    Route::get('index','Author\IndexController@index');
    Route::get('login','Author\IndexController@login');//登录页面
    Route::get('book','Author\BookController@book');
    Route::get('booklist','Author\BookController@booklist');
    Route::post('add','Author\BookController@add');//添加作品
    Route::any('section','Author\BookController@section');//添加章节
    Route::any('adddo','Author\BookController@adddo');//章节添加执行
    Route::any('sectionlist/{id}','Author\BookController@sectionlist');//章节展示


});

//管理员
Route::prefix('admin')->group(function(){
    Route::any('add','Admin\RpmapController@add');
    Route::any('lists','Admin\RpmapController@lists');
    Route::any('addhandle','Admin\RpmapController@addhandle');
    Route::any('signlist','Admin\RpmapController@signlist');//签约审核列表
    Route::any('update','Admin\RpmapController@update');//签约
    //分类
    Route::any('type','Admin\RpmapController@type');
    //添加分类
    Route::any('addtype','Admin\RpmapController@addtype');
    //展示
    Route::any('listtype','Admin\RpmapController@listtype');
    //删除
    Route::any('deltype/{type_id}','Admin\RpmapController@deltype');


});

/*
 * 前台
 */
Route::prefix('index')->group(function(){
    //首页
    Route::get('index','Index\IndexController@index');
    //登录
    Route::get('login','Index\IndexController@login');

});