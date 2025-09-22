<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Pastikan Auth di-import
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Cek apakah ada pengguna yang sedang login
        // 2. Jika ada, cek apakah properti 'is_admin' pada user tersebut bernilai true (atau 1)
        if (Auth::check() && Auth::user()->is_admin) {
            // Jika kedua syarat terpenuhi, izinkan request untuk melanjutkan
            return $next($request);
        }

        // Jika salah satu syarat tidak terpenuhi, tolak akses dengan halaman error 403
        abort(403, 'AKSES DITOLAK: ANDA BUKAN ADMIN.');
    }
}