<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class checkAdminLogin
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
        // nếu user đã đăng nhập
        if (Auth::check())
        {
            $user = Auth::user();
            // nếu level =1 (admin), status = 1 (actived) thì cho qua.
           // if ($user->roles == 'admin' && $user->status == 1 )
            if ($user->roles == 'admin')
            {
                return $next($request);
            }
            else
            {
                Auth::logout();
                return redirect()->route('getLogin');
            }
        } else
            return redirect('admincp/login');
    }
}
