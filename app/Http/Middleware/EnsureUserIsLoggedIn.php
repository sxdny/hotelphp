<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;

class EnsureUserIsLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifico que hay un usuario que ha iniciado sesión
        $userId = $request->cookie('userId');
        
        if(!$userId) {
            return redirect('/');
        }
        
        view()->share('userId', $userId);
        return $next($request);
    }
}
