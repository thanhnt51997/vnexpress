<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckStatus
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
        $response = $next($request);

        //If the status is not approved redirect to login

        if(Auth::check() && Auth::user()->status != '1'){

            Auth::logout();

            $request->session()->flash('alert-danger', 'Tài khoản của bạn đã bị khóa hoặc chưa được kích hoạt');

            return Response()->json(([
                'status' == 0,
                'message' => 'Tài khoản của bạn đã bị khóa hoặc chưa được kích hoạt'
            ]));
//            return redirect()->with('erro_login', 'Your error text');

        }

        return $response;
    }
}
