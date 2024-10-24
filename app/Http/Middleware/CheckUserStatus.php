<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $status
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $status)
    {
        // Cek apakah pengguna sudah login
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Periksa apakah status pengguna sesuai dengan status yang diinginkan
        if (auth()->user()->validate !== $status) {
            return redirect()->route('notapproved')->withErrors('Access denied.');
        }

        return $next($request);
    }
}

