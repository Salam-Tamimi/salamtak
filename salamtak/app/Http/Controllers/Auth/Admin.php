<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Closure;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth()->user()->role=='admin'){
            return $next($request);
        }
        abort(401);
    }
    
}
