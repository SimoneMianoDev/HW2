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

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup', "App\Http\Controllers\SignupController@registrazione_form")->name('signup');
Route::post('signup', "App\Http\Controllers\SignupController@registrati");
Route::get('signup/email/{email}', "App\Http\Controllers\SignupController@checkEmail");
Route::get('signup/username/{username}', "App\Http\Controllers\SignupController@checkUsername");

Route::get('home', "App\Http\Controllers\HomeController@index")->name('home');

Route::get('login', "App\Http\Controllers\LoginController@login_form");
Route::post('login', "App\Http\Controllers\LoginController@accedi");
Route::get('logout', "App\Http\Controllers\LoginController@logout")->name('logout');

//SPOTIFY
Route::get('spotify', "App\Http\Controllers\SpotifyController@spoti");
Route::get('spotify/searchSpotify/{query}', "App\Http\Controllers\SpotifyController@searchSpotify");

//PROFILO
Route::get('profilo', "App\Http\Controllers\ProfiloController@index");

//LIKES
Route::get('likes/add', 'App\Http\Controllers\LikeController@add');
Route::get('likes/remove/{titolo}', 'App\Http\Controllers\LikeController@remove');
