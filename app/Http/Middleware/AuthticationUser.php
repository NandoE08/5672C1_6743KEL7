<?php

namespace App\Http\Middleware;

use Closure;

class AuthticationUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    private $auth;

    public function __construct(){
        $this->auth = app('auth');
    }
    
    public function handle($request, Closure $next, $tingkat){

        if($this->auth->check() && !auth()->user()->levellogin($tingkat)){
            return redirect('/login');
        }
        return $next($request);
    }
}