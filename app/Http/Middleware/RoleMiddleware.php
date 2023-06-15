<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = Auth::user();

        if (!$user) {
            // User is not authenticated, redirect to login or return an error response
            return redirect()->route('login');
        }

        foreach ($roles as $role) {
            if ($user->role == $role) {
                return $next($request);
            }
        }

        // User does not have the required role, redirect to unauthorized or return an error response
        return redirect()->route('unauthorized');
    }
}
