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
        // Pastikan user sudah login dan memiliki atribut is_admin == tr
        if (auth()->check() && auth()->user()->is_admin == 1) {
            return $next($request);
        }

        // Jika tidak, arahkan kembali ke halaman sebelumnya atau halaman lain
        // return response('Unauthorized.', 403);
        return redirect('home');
    }
}
