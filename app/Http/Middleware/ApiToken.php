<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Factory as Auth;

class ApiToken
{
    public function handle($request, Closure $next)
    {
        if ($request->api_token != env('API_KEY')) {
            return response()->json('Unauthorized', 401);
        } 

        return $next($request);
    }
}