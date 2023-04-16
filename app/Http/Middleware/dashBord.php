<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class dashBord extends Middleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    protected function handle(Request $request, Closure $next)
    {
        $user = User::Auth();
        if ($user->admin == 1) 
        {
            return $next($request);
        }
        else
        {
            abort(404);
        }
    }
}
