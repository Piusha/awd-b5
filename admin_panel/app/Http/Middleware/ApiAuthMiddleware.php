<?php

namespace App\Http\Middleware;

use Closure;
use App\Repositories\User\UserInterface;
class ApiAuthMiddleware
{
    private $user = null;
    function __construct(UserInterface $user){
        $this->user = $user;

    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(!$request->filled('token')){
            return response()->json([
                'status'=>'error',
                'error'=>'Cannot access this URL, You need to login in order to access this url'
            ]);
        }

        $isValid =  $this->user->validateToken($request->token);
        if(!$isValid){
            return response()->json([
                'status'=>'error',
                'error'=>'Cannot access this URL, You need to login '
            ]);
        }
        
        return $next($request);
    }
}
