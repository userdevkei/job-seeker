<?php

namespace App\Http\Middleware;

use Closure;

class Employer
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
        if(auth()->user()->level == 'Employer'){
            return $next($request);
        }
        else {
            return redirect('Admin');
        }
    }
}
