<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function createPost()
    {
        return view('pages.create-post');
    }

    public function storePost(Request $request){

        $data =$request -> all();
        dd($data);
    }
}