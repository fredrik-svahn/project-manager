<?php

namespace App\Http\Middleware;

use App\Http\Controllers\API;
use Closure;
use Illuminate\Http\Request;

class AuthAPI
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $api = new API();

        $response = $api
            ->url("/api/whoami")
            ->get()
            ->response();

        dd($response);

        if (!$user) return redirect("/login");

        return $next($request);
    }
}
