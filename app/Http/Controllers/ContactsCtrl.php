<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactsCtrl extends Controller
{
    //
    public function contacts(){
        return view('contacts');
    }
}
