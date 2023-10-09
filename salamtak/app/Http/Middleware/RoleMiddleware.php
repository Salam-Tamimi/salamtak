<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            // User is not authenticated, redirect to login
            return redirect('login');
        }

        $user = Auth::user();

        if (in_array($user->role, $roles)) {
            // User has one of the specified roles, proceed
            return $next($request);
        }

        // User does not have any of the specified roles, unauthorized
        return abort(403);
    }
    
}
