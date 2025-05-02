<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Ensure the session key for the logged admin is properly checked
        if (!session()->has('LoggedAdmin')) {
            // Redirect non-authenticated users to the admin login page
            if (!in_array($request->path(), ['admin-login', 'admin/login'])) {
                return redirect()->route('admin.login')->with('fail', 'You must be logged in!');
            }
        } else {
            // If the admin is already logged in and tries to access login routes, redirect to the dashboard
            if (in_array($request->path(), ['admin-login', 'admin/login'])) {
                return redirect()->route('admin.dashboard')->with('fail', 'You are already logged in!');
            }
        }

        // Proceed with the next request and disable caching
        return $next($request)
            ->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', 'Sat, 01 Jan 1990 00:00:00 GMT');
    }
}
