<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;
        $user = $request->user();

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if ($request->user()->role == 'A') {
                    return redirect('/admin/dashboard');
                }

                if ($request->user()->role == 'B') {
                    return redirect('business/dashboard');
                }

                if ($request->user()->role == 'U') {
                    return redirect('/home');
                }
            }
        }

        return $next($request);
    }
}
