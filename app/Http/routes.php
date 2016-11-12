<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

//
//Route::get('/', function () {
//
//
//    if (Auth::check()){
//    return 'hi you are logged in';
//    }
//});


Route::get('/', function () {
   if (Auth::attemp(['username'=>$username, 'password'=>$password])){
       return redirect()->intended();
   }
});

Route::auth();

Route::get('/home', 'HomeController@index');
