<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class NewsController extends Controller
{
    //
    public function index()
    {
    	return view('admin/news/index');
    }
    public function add()
    {
    	return view('admin/news/add',[
    		'title'=>'这是主页'
    		]);
    }
    public function edit()
    {	
    	$arr = ['name','age','address'];
    	return view('admin/news/edit',[
    			'status'=>'opens', 
    			'arr'=>$arr
    		]);
    }
    //数据库
    public function db()
    {
    	//查询数据库
    	$rs = DB::select('select * from sc_name');
    	$rs = DB::select('select * from sc_name where id= ?',[1,3]);
    	
    	foreach($rs as $k=>$v){
    		dump($v->name);
    	}
    	//插入数据
    	//$res = DB::insert('insert into sc_name(id,name) values(4,"feng")');
    	//dump($res);

    	// $res = DB::update();
    	// $res = DB::delete();


    	//事物操作
    	//开启事物
    	// DB::beginTransaction();
    	// $res = DB::update('update sc_doller set money = money + 2000 where name = "马云"');
    	// $res1 = DB::update('update sc_doller set money = money - 2000 where name = "王健林"');
    	// if($res && $res1){
    	// 	DB::commit();
    	// } else {
    	// 	DB::rollback();
    	// }


    	//查询构造器
    	//get获取表里所有的数据
    	$rs1 = DB::table('sc_name')->get();
    	dump($rs1);
    }
}
