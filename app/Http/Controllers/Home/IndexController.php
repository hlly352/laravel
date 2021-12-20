<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
    	return view('home.welcome');
    }
    //添加控制器
    public function add()
    {
    	return view('home/user/add');
    }
    //插入控制器
    public function insert(Request $request)
    {
        // dump($request->all());
        return back()->with(['success'=>'添加成功']);
    }
    //编辑控制器
    public function edit($id)
    {
    	echo $id;
    }
    //删除控制器
    public function del(){
    	echo $_GET['id'];
    }
   
    public function ups()
    {
        echo 'dd';
    }
    //模板引擎
    public function homepage()
    {
        return view('home.index', [
                'title'=>'模板引擎带出的标题', 
                'status'=>1,
                'as'=>'<a href="https://www.baidu.com ">点击超链接</a>'
            ]);
    }
}
