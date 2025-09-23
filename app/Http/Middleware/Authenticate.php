<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{

    protected function redirectTo($request): ?string
    {
        if (!$request->expectsJson()) {
            if ($request->is('customer') || $request->is('customer/*')) {
                return route('customer.login'); // ✅ Customers go to customer login
            }

            return route('admin.login'); // ✅ Admins go to admin login
        }

        return null;
    }
}
