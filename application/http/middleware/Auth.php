<?php

namespace app\http\middleware;

class Auth
{
    public function handle($request, \Closure $next)
    {
        if (!session('?admin.id')) {
            return redirect('/admin');
        }

        return $next($request);
    }
}
