<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConcertController extends Controller
{
    /**
     * Fait la liste des articles dans le coté admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $concerts = Concert::all()->orderBy('created_at', 'desc')->get();;
        return view('concerts.index', ['articles' => $concerts]);
    }

    /**
     * Retourne la page posts/create qui est un formulaire pour la création d'article.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('concerts.create');
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
        
        $article = new Concerts;
        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->body = $request->body;

        $article->save();
        
        return redirect(route('concerts.show', $Concerts->id));
        
    }

    /**
     * Affiche le formulaire d'édition d'un article sélectionné dans la liste des articles coté admin.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow($id)
    {
              
        $article  = Concert::findOrFail($id);

        return view('concerts.show')->with('concerts', $concerts);
    }

    /**
     * Affiche le formulaire d'édition d'un article sélectionné dans la liste des articles coté admin.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $article = Concert::findOrFail($id);
        return view('concerts.update', ['concerts' => $concerts]);
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
       $article = Concert::findOrfail($id);
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

        return view('concerts.update', ['concert' => $concert]);

    }

    /**
     * Supprime un article de la base de données.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postDestroy(Request $request,$id)
    {
      $concert = Concert::findOrFail($id);
      $concert->delete();
      $request->session()->flash("msg", "Article suprimé");
      return redirect('posts/index');
    }
}
