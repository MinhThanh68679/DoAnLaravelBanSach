<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class CheckAdminLogin
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
        // nếu user đã đăng nhập
        if (Auth::check())
        {
            $taikhoan = Auth::User();
            // nếu level =1 (admin), status = 1 (actived) thì cho qua.
            if ($taikhoan->LoaiTK == 1 )
            {
                return $next($request);
            }
            else
            {
                Auth::logout();
                return redirect()->route('getLogin');
            }
        } else
            return redirect()->route('getLogin');
    }
}
