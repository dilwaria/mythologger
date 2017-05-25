<?php

namespace App\Http\Middleware;

use Closure;

class Redirections
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
        $url=$_SERVER['SERVER_NAME'];
        $uri= $_SERVER['REQUEST_URI'];
        if($url!="www.mythologger.com" && !getenv('LOCAL_SETUP')){
            $fullUrl= "https://www.mythologger.com$uri";
            header("Location: $fullUrl",TRUE,301);
            exit();
        }
        return $next($request);
    }
}
