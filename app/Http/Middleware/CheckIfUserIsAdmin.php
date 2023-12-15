<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Middleware\Authenticate;

class CheckIfUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next):response {
      
        if(Auth::user()&& Auth::user()->is_admin)
       
    
    {
        return $next($request);
    }
     return redirect()->route('home')->with('message','Solo gli amministratori possono accedere');

}
}
