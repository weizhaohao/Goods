<?php
//展示路由
Route::get('xian',"Zhoukao2Controller@xian");
//分页
Route::get('create',"Zhoukao2Controller@cerate");
//搜索
Route::get('search',"Zhoukao2Controller@search");
//删除
Route::get('delete',"Zhoukao2Controller@delete");
























































































































































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

//自定义的路由
Route::get('/user',"IndexController@index");

//获取环境配置
Route::get('env',function(){
	var_dump(env('APP_DEBUG'));
	var_dump(env('DB_HOST'));
	var_dump(env('DB_PREFIX'));
});

//获取配置
Route::get('conf',function(){
	//读取系统配置中的时区
	//dd(Config('app.timezone'));
	//读取邮件配置中的端口
	//dd(Config('mail.port'));

	Config(['app.title'=>'云之梦,一家伟大的教育机构']);
	echo Config('app.title');
	echo date('Y-m-d H:i:s');
});

//基本路由
// Route::get('jiben',function(){
// 	echo "基本路由";
// });

//加载路由
// Route::get('jiben1',function(){
// 	return view('home');
// });

//加载控制器
// Route::get('jiben2',"JibenController@index");
//Route::get('jiben3',"Jiben1Controller@index");

//路由类型
	//登陆页面
	// Route::get('login',"LoginController@index");
	// //处理登陆页面
	// Route::post('check',"LoginController@check");
//表单页面
	//Route::get('index',"ZscgController@index");
//处理表单页面
	//Route::post('add',"ZscgController@add");
//展示
	//Route::get('show',"ZscgController@show");
//删除
//	Route::get('delete',"ZscgController@delete");
//
//	Route::get('zhan',"ZhanController@zhan");
//	Route::get('update',"ZscgController@update");
//	Route::post('upd',"ZscgController@upd");
	//加载项目模板
	Route::get('demo',"GoodsController@demo");
	Route::get('goods_show',"GoodsController@goods_show");
	Route::get('goods_delete',"GoodsController@goods_delete");