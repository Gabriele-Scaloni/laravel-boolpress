<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtenteController extends Controller
{
    public function home()  {
        return view('pages.home');
    }
    public function apiGetUtente() {

        return json_encode('ciao');
    }
}
