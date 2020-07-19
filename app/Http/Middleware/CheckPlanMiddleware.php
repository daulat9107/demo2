<?php

namespace App\Http\Middleware;

use Closure;

class CheckPlanMiddleware
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
        $is_premium_member=true;
        if(!$is_premium_member){
            return redirect()->route('home');
        }
        return $next($request);
    }
}
