<?php

namespace App\Http\Middleware\Admin;

use Closure;

class AuthCheck
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
        if (!\Session::get('ADMIN_AUTH', false)) {
            throw new \Exception('Auth False');
        }
        return $next($request);
    }
}
