<?php

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class AuthMiddle{

    public function handle(Request $request,Closure $next)
    {
        if(Auth::check() && Auth::user()->type =='admin'){
            return $next($request);
        }else{
            return redirect('')->guest(route('login'));
        }

    }
}
