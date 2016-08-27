<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Auth;
use Validator;
use Hash;

class UserController extends Controller
{
    // returne la liste des utilisateurs
    public function getIndex(){
        $users = User::All();
        return view('users.index', ['users' => $users]);
    }
    /**
     * Retourne la liste de l'utilisateur sélectionné 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow($id)
    {
        return view('users.show', ['user' => User::findOrFail($id)]);
    }

    /**
     * affiche le resultat des changement de données de l'utilisateur
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit()
    {
        $id = Auth::user()->id;
        $user = User::findORFail($id);
        return view ('users.edit', ['user' => $user]);
    }

    /**
     * Vérifie le formulaire de changement de données et si valide change les données de l'utilisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */
    public function postEdit(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $validator = Validator::make(
        $request->all(),
        ['first_name' => 'required',
        'last_name' => 'required',
        'username' => 'required',
        'mail' => 'email|unique:user']);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();
        $request->session()->flash("edit", "edition réussis");
        return view('users.show', ['user' => $user]);
    }
    /*
    *
    * Retourne la vue du formulaire de changement de mot de passe
    *
    */
    public function getPasswordReset(){
        return view('users.passwordReset');
    }

     /*
    *
    * Vérifie les données rentré par le formulaire de changement de mot de passe (ancien mot de passe, nouveau mot de passe, confirmation du nouveau mot de passe). Sauvegarde le nouveau mot de passe dans la base de données de l'utilisateur
    *
    */
    public function postPasswordReset(Request $request){
        
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        if(!Hash::check($request->password[0], $user->password)){
            $request->session()->flash("msg", "L'ancien mot de passe rentré n'est pas bon");
            return back();

        }if($request->password[1] !== $request->password[2]){
             $request->session()->flash("msg", "Les nouveaux mots de passes ne sont pas les memes");
             return back();
        }

            $request->session()->flash("msg", "Nouveau mot de passe enregistré");
            $user->password = Hash::make($request->password[2]);
            $user->save();
            return view('users.passwordReset');
    }
}
