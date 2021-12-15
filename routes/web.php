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

// Route::get('/', function () {
//     return view('welcome');
// });

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
Route::get('/user/{id}*{name}',function($id,$name){
	echo $id;
	echo '<hr>';
	echo $name;

});
//限定参数的类型
Route::get('/users/{names}',function($name){
	echo $name;
})->where('names', '[a-z]+');

//地址栏中？带参数
Route::get('/delete', function(){
	echo $_GET['id'];
});
//路由别名
Route::get('/delete',['as'=>'del', function(){
	echo '路由别名测试'.'<br>';
	echo '获取路由别名名称：';
	return Route::currentRouteName();
}]);
//跳转到路由别名
Route::get('/bieming',function(){
	return redirect()->route('del');
});

//路由组 /中间件

Route::group(['middleware'=>'login'], function(){
	//后台信息
	Route::get('/admin', function(){
		echo '后台首页';
		echo session('uid');
	});
	Route::get('/admin/user', function(){
		echo '后台用户信息';
	});

});
//后台的登陆页面
Route::get('admin/login', function(){
	echo '后台的登陆页面';
});
//存储session
Route::get('/session', function(){
	session(['uid'=>'dd']);
});
//手动方式跳转到404
Route::get('/us', function(){
	abort(404);
});
//ajax POST请求测试
Route::post('/ajax', function(){
	echo 'ajax post请求测试';
});
//单独使用中间件
Route::get('/mid',function(){
	echo '测试成功';
})->middleware('login');
//另一种写法
Route::get('/test_mid', ['middleware'=>'login', function(){
	echo '另一种中间件写法';
}]);

//使用控制器
Route::get('/','Home\IndexController@index');
Route::get('/add', 'Home\IndexController@add')->middleware('login');
Route::post('/home/insert', 'Home\IndexController@insert');
Route::get('/home/edit/{id}', 'Home\IndexController@edit')->where(['id'=>'[0-8]+']);
Route::get('/home/del', 'Home\IndexController@del');

//资源控制器
Route::resource('/admin/user', 'Admin\UserController');