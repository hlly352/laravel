<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
    	return view('welcome');
    }
    //添加控制器
    public function add()
    {
    	return view('home/user/add');
    }
    //插入控制器
    public function insert()
    {
    	dump($_POST);
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
}
