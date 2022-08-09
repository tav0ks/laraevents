<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{

    public function handle(Request $request, Closure $next, $role)
    {
        $userRole = auth()->user()->role;

        if ($userRole !== $role) {
            if ($userRole === 'participant') {
                return redirect()->route('participant.dashboard.index');
            }

            if ($userRole === 'organization') {
                return redirect()->route('organization.dashboard.index');
            }
        }
        return $next($request);
    }
}
