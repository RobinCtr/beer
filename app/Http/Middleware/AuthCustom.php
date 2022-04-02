<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthCustom
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('session_id')) {
            if (session('session_estado') == 1) {
                return $next($request);
            } else {
                return redirect()->route('login')->with('message-warning', 'Cuenta bloqueada por el administrador');
            }
        } else {
            return redirect()->route('login')->with('message-warning', 'Para continuar primero debes iniciar sesión.');
        }
        
    }
}
