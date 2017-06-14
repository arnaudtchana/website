<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServicesCtrl extends Controller
{
    //
    public function services(){
        return view('services');
    }
}
