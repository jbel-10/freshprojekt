<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        // Kontroluje jestli je admin prihlaseny
        if (!session('admin_id')) {
            // Presmerovani k prihlaseni, pokud admin neni zalogovany
            return redirect('/admin')->withErrors(['loginError' => 'Prosim prihlaste se pro pokracovani']);
        }

        // Pokracovat pokud se user zaloguje
        return $next($request);
    }
}
