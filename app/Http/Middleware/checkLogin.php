<?php

namespace App\Http\Middleware;

use Closure;

class checkLogin
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

        $name = session("username");
        if(empty($name)){
            $arr=[
                "success"=>false,
                "code"=>90000,
                "msg"=>"没有登录",
                "url"=>"/login",
            ];
            echo json_encode($arr);
            exit;
        }
        return $next($request);
    }
}
