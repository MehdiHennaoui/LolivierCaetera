<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Concert;
use Carbon\Carbon;
use GrahamCampbell\Markdown\Facades\Markdown;
use DB;


class NewsController extends Controller
{
    //Fait la liste des articles du plus récent au plus ancien dans le coté admin et les affichent.

    public function getHome(){
    	
    	$news = Article::take(2)->orderBy('created_at', 'desc')->get();
        $concerts = Concert::where('date', '>=', Carbon::now())->take(5)->get();

    	return view('welcome', ['news' => $news, 'concerts' => $concerts]);
    }
    // affiche le contenue de l'article sélectionnée
    public function getShow($id) {
    	$news = Article::findOrFail($id);
    	return view('article', ['news' => $news]);
    }
    // affiche tous les articles
    public function getIndex() {
        return view('articles', ['news' => Article::orderBy('created_at', 'desc')->get()]);
    }
}
