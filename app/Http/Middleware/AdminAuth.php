<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        // Check if admin is authenticated
        if (!session('admin_id')) {
            // Redirect to login if admin is not authenticated
            return redirect('/admin/dashboard')->withErrors(['loginError' => 'Please log in as an admin to access this page.']);
        }

        // Allow the request to proceed if authenticated
        return $next($request);
    }
}
