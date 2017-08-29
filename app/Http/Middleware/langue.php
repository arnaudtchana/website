<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

class langue
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('locale')) {
            //si on a la variable locale pour la langue dans la session, on la defini dans lapp
            /*ce midlleware permet de mettre a jour la variable de langue en fonction de la selection de l'utilisteur*/
            App::setLocale(session('locale'));
        }
        return $next($request);
    }
}
