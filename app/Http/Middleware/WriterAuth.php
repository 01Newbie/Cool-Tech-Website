<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class WriterAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        // and if the authenticated user is a writer
        if (!auth()->check() || !auth()->user()->isWriter()) {
            // If not authenticated or not a writer,
            // redirect to the writer login page
            return redirect('/writer-login'); 
        }

        // If authenticated and a writer, proceed with the request
        return $next($request); 
    }
}
