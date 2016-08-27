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

// Retourne la vue  accueil
Route::get('/', 'NewsController@getHome');
Route::get('/article/{id}', ['uses' =>'NewsController@getShow', 'as' => 'article']);
Route::get('/tour', function(){
	$concerts = App\Concert::where('date', '>=', Carbon\Carbon::now())->get();
	return view('concerts', ['concerts'=>$concerts]);
});
Route::get('/articles', 'NewsController@getIndex');

// Retourne les vues liée à l'enregitrement 
Route::auth();

//retourne les vues et les fonctions liées au changement de données de l'utilisateur
Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function(){
Route::controller('user', 'UserController', [
		'getIndex' => 'user.index',
		'getShow' => 'user.show',
		'getEdit' => 'user.edit',
		'postEdit' => 'user.post',
		'getPasswordReset' => 'user.password',
		'postPasswordReset' => 'user.password',
	]);
Route::controller('posts', 'ArticleController', [
		'getIndex' => 'posts.index',
		'getCreate' => 'posts.create',
		'postStore' => 'posts.store',
		'getShow' => 'posts.show',
		'getEdit' => 'posts.edit',
		'postUpdate' => 'posts.update',
		'postDestroy' => 'posts.destroy',
	]);
Route::controller('concerts', 'ConcertController', [
		'getIndex' => 'concert.index',
		'getCreate' => 'concert.create',
		'postCreate' => 'concert.store',
		'getShow' => 'concert.show',
		'getEdit' => 'concert.edit',
		'postUpdate' => 'concert.update',
		'postDestroy' => 'concert.destroy',
	]);
});