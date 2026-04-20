<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
        return redirect('/login');
    }

    // allow only admin + editor inside admin system
    if (!in_array(auth()->user()->role, ['admin', 'editor'])) {
        abort(403, 'Access Denied');
    }

    return $next($request);

    }
}
