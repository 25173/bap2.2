<?php

namespace App\Http\Middleware;

use Closure;
use Http\Client\Exception\HttpException;

class isAdmin
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
    	// HAAL gebruiker op uit de request
	    if ($user = $request->user()){

	        // check of deze superadmin is
	        if ($user->is_admin ===1) {

		    // zo ja, ga $naar next middleware
		    return $next( $request );
	        }
	    }

        //anders acces denied pagina
	    abort(403);
    }
}
