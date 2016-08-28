<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Concert;

class ConcertController extends Controller
{
    /**
     * Fait la liste des concerts dans le coté admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $concerts = Concert::orderBy('created_at', 'desc')->get();;
        return view('concerts.index', ['concerts' => $concerts]);
    }

    /**
     * Retourne la page posts/create qui est un formulaire pour la création des concerts.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('concerts.create');
    }

    /**
     * Vérifie les données envoyé par l'utilisateur. Si conforme enregistre dans la base de données un nouveau concert.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreate(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            ['date' => 'required',
            'city' => 'required',
            'hour' => 'required',
            'place' => 'required',
            ]);
        
        $concert = new Concert;
        $concert->date = $request->date;
        $concert->hour = $request->hour;
        $concert->adress = $request->adress;
        $concert->city = $request->city;
        $concert->place = $request->place;

        $concert->save();
        $request->session()->flash("msg", "concert créé");
        return redirect(route('concert.index'));
        
    }

    /**
     * Affiche le formulaire d'édition d'un concert sélectionné dans la liste des articles coté admin.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow($id)
    {
              
        $concert  = Concert::findOrFail($id);

        return view('concerts.show')->with('concert', $concert);
    }

    /**
     * Affiche le formulaire d'édition d'un article sélectionné dans la liste des concerts coté admin.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $concert = Concert::findOrFail($id);



        return view('concerts.update', ['concert' => $concert]);
    }

    /**
     * Vérifie les données envoyé par l'utilisateur du formulaire d'édition du concert. Si conforme enregistre dans la base de données la modification de l'article.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $id)
    {
       $concert = Concert::findOrfail($id);
       $validator = Validator::make(
            $request->all(),
            ['title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
            ]);
        $concert->id = $request->id;
        $concert->date = $request->date;
        $concert->hour = $request->hour;
        $concert->adress = $request->adress;
        $concert->city = $request->city;
        $concert->place = $request->place;
        $concert->save();
        $request->session()->flash("msg", "concert mis à jour");

        return redirect(route('concert.index'));

    }

    /**
     * Supprime un concert de la base de données.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postDestroy(Request $request,$id)
    {
      $concert = Concert::findOrFail($id);
      $concert->delete();
      $request->session()->flash("msg", "concert supprimé");
      return redirect(route('concert.index'));
    }
}
