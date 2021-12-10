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

Route::get('/index', function (){
	return 'dd';
});
//获取配置信息
Route::get('/config',function(){
	echo Config::get('app.path').'<hr>';
	echo Config::get('database.default').'<hr>';
	//获取env文件内容
	echo env('APP_ENV');
});
//get路由测试
Route::get('/form',function(){
	return view('form');
});
//post路由测试
Route::post('/test',function(){
	dump($_POST);
});
//带参数的路由
Route::get('/user/{id}',function($id){
	echo $id;
});
//限定参数的类型
Route::get('/users/{names}',function($name){
	echo $name;
})->where('names', '[a-z]+');