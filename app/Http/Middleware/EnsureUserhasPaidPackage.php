<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class EnsureUserhasPaidPackage
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
        if( $request->user()->utype === 'USR' && $request->user()->has_paid_package === 'yes' && $request->user()->has_free_package === 'yes')
        {

            return $next($request);
        }
        else {

            return redirect()->route('user.package');
        }

    }
}
