<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class TutorLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()){
            $user = Auth::user();
            if ($user -> idRole == 2 || $user -> idRole == 1 || $user -> idRole == 5){
                return $next($request);
            } else {
                return redirect('client/login');
            }
        } else {
            return redirect('client/login');
        }
    }
}
