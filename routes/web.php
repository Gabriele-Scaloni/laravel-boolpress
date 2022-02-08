<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); */

Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'GuestController@home')->name('home');

Route::get('/posts', 'PostController@posts')->name('posts');

Route::middleware('auth')->group(function() {
    Route::get('posts/create', 'PostController@create')->name('create');
    Route::post('posts/store', 'PostController@store')->name('store');
});

/*
??
GET /posts => show dei post (pubblica) ok
GET /posts/create => view crea un post (autenticati) ok
POST /posts/store => crea il post sul db (autenticati) ok
GET /posts/id => dettaglio del post (pubblica)
GET /posts/id/edit => modifica del post (autenticati)
...
*/