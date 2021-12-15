<?php

namespace App\Http\Middleware;

use Closure;

class QuanjiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //存储ip地址
        $ip = $request->ip();
        $str = '时间是：'.date('Y-m-d H:i:s', time()).'ip地址是：'.$ip."\n\r";
        file_put_contents('quan.txt', $str,FILE_APPEND);
        return $next($request);
    }
}
