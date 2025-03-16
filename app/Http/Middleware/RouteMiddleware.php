<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RouteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()){
            if(Auth::user()->role == 'admin'){
            return redirect('AdminPage');
        }
        else{
            return redirect('GuestPage');
        }
        }
        
    }
    //whats's this does if it check the users role and it will redirect the user the their pages
    //if the user's role is admin then the user will go to the Admin Page then if it guest then the user will go to the Guest Page
    
}
