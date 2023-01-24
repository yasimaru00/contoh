<?php

namespace App\Http\Middleware;

use App\MenuRole;
use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$MenuRole)
    {
        $count = MenuRole::where('role_id', auth()->user()->user_role->role_id)
        ->whereIn('menu_id',$MenuRole)->count();

        if($count >= 1){
            return $next($request);
        } else {
            return redirect('/');
        }
        
    }
    
}
