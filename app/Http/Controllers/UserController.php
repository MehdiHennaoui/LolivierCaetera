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
    
    public function getIndex(){
        
        $users = User::All();
        return view('users.index', ['users' => $users]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow($id)
    {
        return view('users.show', ['user' => User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
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
     * Update the specified resource in storage.
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
        return view('users.show', ['user' => $user]);
    }
    public function getPasswordReset(){
        return view('users.passwordReset');
    }
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
