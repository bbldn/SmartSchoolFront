<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        if (!$request->session()->has('token')) {
            return redirect($this->redirectTo());
        }
        return $next($request);
    }

    protected function redirectTo()
    {
        return route('login');
    }
}
