<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cookie;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        dump('dd');
        //获取请求方式
        echo $request->method();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin/user/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dump($request);
        echo $request->method();
        //判断请求方式
      // dd($request->isMethod('get'));
       //获取参数
       // dump($request->all());
       //上传文件
       if($request->hasFile('profile'))
       {
            //创建新名字
            $name = rand(1111,9999).time();
            //获取后缀
            $suffix = $request->file('profile')->getClientOriginalExtension();
            dump($suffix);
            //移动文件
            $request->file('profile')->move('./uploads',$name.'.'.$suffix);
       }
       //闪存跳回
       //return redirect('/admin/user/create')->withInput();
       
       return back()->withInput(
            $request->except('password')
        );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        echo $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        echo $id;
        return view('admin/user/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        dump($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        echo $id;
    }
    public function users()
    {
        echo '资源控制器中后加的方法';
    }
    //设置cookie
    public function req(Request $request)
    {
        //设置cookie
        //第一种方式
        \Cookie::queue('class','222',10);
        //第二种方式
       // return response('Hello world')->cookie('names','lamp',30);

        //读取cookie
        $rs = Cookie::get('class');
      //  echo $rs;
        //第二种方式
        $res = $request->cookie('names');
       // dd($res);
       //flash
     //  $request->flash();
       $request->flashOnly('name','age');
       $request->flashExcept('id');
    }
    //闪存
    public function olds(Request $request)
    {
        dump($request->old());
    }
    //响应
    public function res(Request $request)
    {
        return 'dd';

        //返回json
        
    }

}
