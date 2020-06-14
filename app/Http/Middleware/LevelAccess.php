<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

class LevelAccess
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function handle($request, \Closure $next, $level)
    {
        $permission = explode('|', $level);
        if (in_array(Auth::user()->level,$permission)) {
            return $next($request);
        }
        return response()->view('error');
    }
}
