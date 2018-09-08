<?php

namespace App\Http\Middleware;

use Closure;
use App\Place;

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
        if(Place::count() == 0)
            return redirect()->route('places.index');

        return $next($request);
    }
}
