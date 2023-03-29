<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Company
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next){
        // dd(Auth::user()->id);
        // if(Auth::user()->id && Auth::user()->id==$request->id){
        //     return abort(403);
        // }; 
        // return  $next($request);
    }
}
