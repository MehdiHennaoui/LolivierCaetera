<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use DB;


class NewsController extends Controller
{
    //Fait la liste des articles du plus récent au plus ancien dans le coté admin et les affichent.

    public function getNews(){
    	
    	$news = DB::table('articles')->orderBy('created_at', 'desc')->get();

    	return view('welcome', ['news' => $news]);
    }
}
