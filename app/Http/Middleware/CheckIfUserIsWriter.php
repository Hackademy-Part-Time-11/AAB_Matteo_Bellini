<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class CheckIfUserIsWriter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next) :response
   { 
    if(Auth::user() && Auth::user()->is_writer)
    {
        return $next($request);
    }
    return redirect()->route('home')->with('message', "solo gli autori possono accedere alla pagina di creazione degli articoli");
}

}
