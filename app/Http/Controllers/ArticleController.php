<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Validator;
use Auth;
use DB;


class ArticleController extends Controller
{
    /**
     * Fait la liste des articles dans le coté admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $articles = DB::table('articles')->orderBy('created_at', 'desc')->get();;
        return view('posts.index', ['articles' => $articles]);
    }

    /**
     * Retourne la page posts/create qui est un formulaire pour la création d'article.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('posts.create');
    }

    /**
     * Vérifie les données envoyé par l'utilisateur. Si conforme enregistre dans la base de données un nouvel article.
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
     * Affiche le formulaire d'édition d'un article sélectionné dans la liste des articles coté admin.
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
     * Affiche le formulaire d'édition d'un article sélectionné dans la liste des articles coté admin.
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
     * Vérifie les données envoyé par l'utilisateur du formulaire d'édition de l'article. Si conforme enregistre dans la base de données la modification de l'article.
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
     * Supprime un article de la base de données.
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
