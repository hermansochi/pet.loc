<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<array-key, mixed>
     */
    protected $except = [
        //
        'api/v1/*',
        'api/v1/org/*',
    ];
}
