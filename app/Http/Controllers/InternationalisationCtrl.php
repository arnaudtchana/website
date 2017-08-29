<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class InternationalisationCtrl extends Controller
{
    //ici le controlleur qui gere linternationalisation du site
    public function change_langue_fr()
    {
        /*ici on modifie la langue du site en passant la nouvelle langue dans la variable de session*/
        Session::set('locale', 'fr');
        return Redirect::back();
    }

    public function change_langue_en()
    {
        /*ici on modifie la langue du site*/
        Session::set('locale', 'en');
        //dd(App::getLocale());
        return Redirect::back();
    }
}
