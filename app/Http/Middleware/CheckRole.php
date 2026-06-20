<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
   public function handle($request, Closure $next, $role)
{
    // Jika role user tidak sama dengan role yang diizinkan di route
    if ($request->user()->role !== $role) {
        // Arahkan kembali ke dashboard masing-masing
        if ($request->user()->role === 'dosen') {
            return redirect('/dosen/dashboard');
        } else {
            return redirect('/dashboard');
        }
    }
    return $next($request); }
}

