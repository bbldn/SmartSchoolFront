<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfSmsCodeSent
{
    protected function redirectTo()
    {
        return route('code');
    }

    protected function except()
    {
        return [
            route('code'),
            route('back')
        ];
    }

    public function handle($request, Closure $next)
    {
        $route = $request->root() . "/" . $request->path();
        if ($request->session()->has('identifier') && !in_array($route, $this->except())) {
            return redirect($this->redirectTo());
        }
        return $next($request);
    }


}
