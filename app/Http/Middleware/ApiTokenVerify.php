<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class ApiTokenVerify
{

    public function __construct()
    {

    }

    public function handle($request, Closure $next)
    {
        if ($request->hasHeader('Auth-Token'))
        {
            $usr = User::where('api_token', $request->header('Auth-Token'))
                ->first();
            if ($usr)
            {
                return $next($request);
            }
        } else return abort(404,Auth::check());
        return abort(404, 'User no authentication');
    }
}
