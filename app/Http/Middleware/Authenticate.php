<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request): ?string
    {
        if (! $request->expectsJson()) {
            if ($request->routeIs('customer.*') || $request->routeIs('checkout.*')) {
                return route('customer.login'); // ✅ Redirect customers
            }
            if ($request->routeIs('admin.*')) {
                return route('admin.login'); // ✅ Redirect admins
            }
        }

        return null;
    }
}
