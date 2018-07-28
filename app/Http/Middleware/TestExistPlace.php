<?php

namespace App\Http\Middleware;

use Closure;

class TestExistPlace
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
        if($request->id == null) return redirect()->route('places');
        return $next($request);
    }
}
