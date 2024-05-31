<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login.show');
    }
    
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $routeName = $request->route()->getName();

        $routeName = explode('.', $routeName)[0];

        if (!is_null($request->user()) && !(in_array($routeName, config('defaultpermissions')) || $request->user()->hasPermission($routeName))) {
            abort(403, 'You do not have access to this page');
        }

        return $next($request);
    }
}
