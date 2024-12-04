<?php

namespace App\Http\Middleware;

use Closure;
use session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class countrycheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // $path=$request->path();
         // if(($path=="login"||$path=="register")&& Session::get('user'))
         // {  
         //    return redirect('home');
         // }
         // else if(($path!="login"&&!Session::get('user'))&&($path!="register"&& !Session::get('user')))
         // {
         //    return redirect('login');
         // }

    
        return $next($request); //
    }
}
