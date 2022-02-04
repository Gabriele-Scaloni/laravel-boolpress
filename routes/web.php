<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
});
*/
/*  Auth::routes(); */


Route::get('/', 'UtenteController@home')->name('home');

