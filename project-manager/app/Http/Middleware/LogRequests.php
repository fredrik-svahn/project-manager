<?php

namespace App\Http\Middleware;

use App\Models\RequestLog;
use Closure;
use Illuminate\Http\JsonResponse;
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
    public function handle(Request $request, Closure $next, ...$parameters)
    {
        if(collect($parameters)->contains("noreplay")) {
            $request->attributes->add(["noreplay" => true]);
        }

        return $next($request);
    }

    public function terminate(Request $request, $response, ...$parameters)
    {
        if ($response->isClientError() || $response->isServerError()) return;
        if ($response->isInvalid()) return;
        if ($request->method() == "GET") return;

        RequestLog::create([
                               'path'    => $request->path(),
                               'body'    => $request->except("password", "password_confirmation"),
                               'method'  => $request->method(),
                               'user_id' => $request->user() ? $request->user()->id : 0,
                               'ip'      => $request->ip(),
                               'replayable' => !$request->attributes->has("noreplay")
                           ]);
    }
}
