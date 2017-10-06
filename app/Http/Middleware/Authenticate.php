<?php

namespace App\Http\Middleware;
namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth;


    public function _construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {


        if ( $this->auth->guest() ) {
            if($request->ajax()){
                return response('Unauthorized.', 401);
            }else{
                dd($request);

                return redirect()->guest('login');
            }
        }

        return $next($request);
    }
}
