<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                    $route = '';
                    if( Auth::user()->privilege == User::ADMIN){
                        $route = 'admin.dashboard';
                    }else if( Auth::user()->privilege == User::PROF){
                        $route = 'prof.dashboard';
                    }else {
                        $route = 'dashboard';
                    }
                    // dd($route);
                return redirect()->route($route,Auth::user());
            }
        }

        return $next($request);
    }
}
