<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

       switch ($guard) {
            case 'customer' :
                if (Auth::guard($guard)->check()) {
                    return $next($request);
                }
                else {
                    return redirect()->route('web.customer.login');
                }
                break;  
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('admin.dashboard');
                }
                break;
        }
        return $next($request);
    }
    
}
