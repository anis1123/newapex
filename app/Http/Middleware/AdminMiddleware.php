<?php

namespace App\Http\Middleware;

use Closure;
use App\Article;
use Illuminate\Contracts\Auth\Guard;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     *
     *
     */


    public function handle($request, Closure $next)
    {
        // $value = auth::user()->roles->first()->name;
        // echo $value;
        // if ($value !== "admin") {

        // }
        $value = auth::user()->roles->first()->name;
        if($value != "Admin"){
            return redirect('/');
        }

        return $next($request);

    }




}
