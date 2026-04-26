<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, $role): Response
{
    if (!auth()->check() || auth()->user()->role !== $role) {
        // Jika dia admin tapi nyasar ke area client, balikin ke admin dashboard
        if (auth()->user()->role === 'admin') {
            return redirect('/admin/dashboard');
        }
        // Jika dia client tapi nyasar ke area admin, balikin ke client dashboard
        return redirect('/dashboard');
    }

    return $next($request);
}
}