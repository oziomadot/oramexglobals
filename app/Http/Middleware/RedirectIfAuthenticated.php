<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards): Response
    {
        if (auth()->check()) {
            return redirect()->route('home'); // Change this if you have a specific homepage
        }

        // Store the last visited URL before login
        if (!$request->is('login') && !$request->is('logout')) {
            Session::put('url.intended', url()->current());
        }

        return $next($request);
    }
}
