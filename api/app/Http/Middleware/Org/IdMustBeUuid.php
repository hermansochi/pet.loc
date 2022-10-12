<?php

namespace App\Http\Middleware\Org;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IdMustBeUuid
{
    /**
     * Check id parameter. Id must be UUID.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (! Str::isUuid($request->id)) {
            return response([
                'message' => 'id validation error',
                'errors' => $request->id.' not valid uuid',
            ], 422);
        }
        return $next($request);
    }
}
