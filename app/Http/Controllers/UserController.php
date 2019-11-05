<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function showAction($id)
    {
        $user = User::find($id);
        return view("update", ['user' => $user]);
    }

    public function insertAction(Request $request) {
        $meno = $request->input('meno');
        $priezvisko = $request->input('priezvisko');
        $email = $request->input('email');
        $heslo = $request->input('heslo');
        $vek = $request->input('vek');
        $user = new User();
        $user->meno = $meno;
        $user->priezvisko = $priezvisko;
        $user->email = $email;
        $user->heslo = $heslo;
        $user->vek = $vek;
        $user->save();
        return redirect()->action('UserController@showAllAction');
    }

    public function updateAction($id, Request $request) {
        $user = User::where("id", "=", $id);
        $user->update(["meno" => $request->input("meno"),
            "priezvisko" => $request->input("priezvisko"),
            "email" => $request->input("email"),
            "heslo" => $request->input("heslo"),
            "vek" => $request->input("vek")]);
        return redirect()->action('UserController@showAllAction');
    }

    public function deleteAction($id) {
        $user = User::find($id);
        $user->delete();

        return redirect()->action('UserController@showAllAction');
    }

    public function showAllAction() {
        $users = User::all();
        return view("users", ['users' => $users]);

    }

    public function getAddUserForm() {
        return view("adduser");
    }

}