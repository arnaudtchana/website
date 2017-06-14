<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeCtrl extends Controller
{
    //
    public function accueil(){
        return view('accueil');
    }
}
