<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;
        //  dd($guards);

        foreach ($guards as $guard) {
            // dd((Auth::guard($guard)->check()));
            // dd($guard);
            if (Auth::guard($guard)->check()) {

                if ($guard === "admin") {
                    return route('admin.home');
                }
                if ($guard === "teacher") {
                    // dd('ttttttttttt');
                    // return route('teacher.home');
                    return redirect(RouteServiceProvider::TEACHERHOME);
                }
                // dd('ooo');
                return redirect(RouteServiceProvider::HOME);
            }
        }

        //   dd('will work return');
        return $next($request);
    }
}