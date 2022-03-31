<?php

namespace App\Http\Middleware;

use App\Models\ViewCount;
use Closure;
use Illuminate\Http\Request;

class RegisterViewerCount
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
        if(ViewCount::query()->where('ip', $request->ip())->count() == 0) {
            ViewCount::create([
                'ip' => $request->ip()
            ]);
        }
        return $next($request);
    }
}
