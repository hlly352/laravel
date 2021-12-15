<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //$request 请求对象
    //$next 下一步
    public function handle($request, Closure $next)
    {
        $uid = session('uid');
        if($uid){
            return $next($request);
        } else {
            //重定向 跳转到路由里面
            return redirect('/admin/login');
        }
    }
}
