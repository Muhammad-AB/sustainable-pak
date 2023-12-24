<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BusinessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()->role == 'B') {
            return $next($request);
        }
        elseif($request->user()->role == 'A'){
            return redirect('admin/dashboard');
        }
        elseif($request->user()->role == 'U'){
            return redirect('home');
        }
    }
}
