<?php

namespace App\Http\Middleware;

use App\Models\RequestLog;
use Closure;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class LogRequests
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
        return $next($request);
    }

    public function terminate(Request $request, Response $response)
    {
        if ($response->isClientError() || $response->isServerError()) return;
        if ($request->method() == "GET") return;

        RequestLog::create([
                               'path'   => $request->path(),
                               'body'   => $request->all(),
                               'method' => $request->method()
                           ]);
    }
}
