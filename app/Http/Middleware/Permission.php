<?php

namespace App\Http\Middleware;

use App\user_usergroup_map;
use Closure;
use Illuminate\Support\Facades\Auth;

class Permission
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

       // $group = user_usergroup_map::where('user_id','=',Auth::user()->id)->first();

        return $next($request);
    }
}
