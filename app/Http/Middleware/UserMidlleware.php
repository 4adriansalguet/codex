<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMidlleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(\Illuminate\Support\Facades\Auth::user()->role == 0){
                return $next($request);
            }else{
                return redirect(route('home'))->with('warning', 'Access Denied');
            }
        }else{
            return redirect(route('home'))->with('warning', 'Login first.');
        }
    }
}
