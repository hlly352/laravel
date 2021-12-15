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
    	echo '添加页面';
    }

}
