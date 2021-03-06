<?php

namespace App\Http\Middleware;

use Closure;
use User;

class CheckIsAdmin
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
        if (auth()->user()) {
            if (auth()->user()->isAdmin()) {
                return $next($request);
            }
            Alert::error('Anda tidak mempunyai izin membuka halaman', 'No Access!');
            return redirect()->route('dashboard');
        }
        return redirect()->route('login');
    }
}
