<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Validator;
use Auth;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $articles = Article::All();
        return view('posts.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            ['title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
            ]);
        
        $article = new Article;
        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->body = $request->body;

        $article->save();
        
        return redirect(route('posts.show', $article->id));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow($id)
    {
        $article  = Article::findOrFail($id);

        return view('posts.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $article = Article::findOrFail($id);
        return view('posts.update', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $id)
    {
       $article = Article::findOrfail($id);
       $validator = Validator::make(
            $request->all(),
            ['title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
            ]);
        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->body = $request->body;
        $article->save();
        $request->session()->flash("msg", "article mis à jour");

        return view('posts.update', ['article' => $article]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postDestroy(Request $request,$id)
    {
      $article = Article::findOrFail($id);
      $article->delete();
      $request->session()->flash("msg", "Article suprimé");
      return redirect('posts/index');
    }
}
