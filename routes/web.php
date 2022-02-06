<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
});
*/
/*  Auth::routes();  
 */ 

Route::get('/', 'UtenteController@home')->name('home');


Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');
Route::post('/register', 'Auth\RegisterController@register') -> name('register');
Route::post('/login', 'Auth\LoginController@login') -> name('login');

Route::get('/newguest/list', 'UtenteController@apiGetUtente') -> name('api.getUtente'); 
 