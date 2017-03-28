<?php

namespace App\Http\Middleware;

use App\Security\Enums\SecurityPermission;
use Closure;
use Illuminate\Support\Facades\Gate;

class Permission {
    public function handle($request, Closure $next, $permission) {
        if (\Auth::check()) {
            if (Gate::denies('permission', [$permission])) {
                abort(403);
            }
        }

        return $next($request);

    }
}
