<?php

namespace App\Http\Middleware;

use Closure;

class AuthSesion
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

    public function handle($request, Closure $next)
    {
        if($this->auth->check()){
            return $next($request);
        }
        return redirect('login');
    }
}