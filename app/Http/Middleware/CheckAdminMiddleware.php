<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;
class CheckAdminMiddleware
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
        if(Auth::check()){
            $user = Auth::user();
            if($user->role == 1) {
                return $next($request);
                }
                 else {
                    return redirect('homeuser')->with('success', 'Bạn không đủ quyền để truy cập trang này');
                }

                   }

                 else {return redirect('login')->with('success', 'Bạn không đủ quyền để truy cập trang này');
                 }

            }
        }

