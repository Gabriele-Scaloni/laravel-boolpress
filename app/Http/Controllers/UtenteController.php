<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Post;


class UtenteController extends Controller
{
    public function home()  {

        $posts = Post::all();

        return view('pages.posts', compact('posts'));

    }


    /* per axios  */
    /* public function apiGetUtente() {

        $newguest = Employee::all();

        return json_encode($newguest);
    } */
}
