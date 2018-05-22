<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckIfAuthForPost
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
        if (\auth::user()){
            return $next($request);
        }
        return redirect('/login')-> with('error','You have not logged in');
    }
}
