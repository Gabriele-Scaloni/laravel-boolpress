<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class UtenteController extends Controller
{
    public function home()  {
        return view('pages.home');
    }
    public function apiGetUtente() {

        $newguest = Employee::all();

        return json_encode($newguest);
    }
}
