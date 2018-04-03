<?php

namespace App\Http\Middleware;

use Closure;

class CheckIndex
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
        if ($request->book == 0) {
            return response('NOT VALID',401);
        }

        return $next($request);
    }

}
