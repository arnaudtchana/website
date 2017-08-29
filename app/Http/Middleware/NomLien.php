<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;

class NomLien
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
        /*ici on doit recuperer le nom de la route appelee et mettre a jour la variable de session en charge*/
        $name = url()->current();
        $name = explode('/',$name);
       // $name = Route::currentRouteAction();
        $lien = $name[count($name)-1];/*on met cette valeur dans la variable de session*/
        if ($request->session()->has('lien')) {
            //
            session(['lien' => $lien]);
        }else{
            /*on cree la variable de session et on met le lien*/
            session(['lien' => $lien]);
        }


        //$value = $request->session()->get('lien');
        //dd($request->session()->get('lien'));
        //dd($name[count($name)-1]);
        return $next($request);
    }
}
