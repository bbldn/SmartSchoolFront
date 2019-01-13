<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfAuthenticated
{
    protected function redirectTo()
    {
        return route('index');
    }

    public function handle($request, Closure $next)
    {
        if ($request->session()->has('token')) {
            return redirect($this->redirectTo());
        }
        return $next($request);
    }
}
