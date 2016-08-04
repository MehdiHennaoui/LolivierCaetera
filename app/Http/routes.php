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

/* Retourne la vue  accueil*/
Route::get('/', function () {
    return view('posts/index');
});


Route::auth();

Route::get('/home', 'HomeController@index');
Route::controller('user', 'UserController', [
		'getIndex' => 'user.index',
		'getShow' => 'user.show',
		'getEdit' => 'user.edit',
	]);
