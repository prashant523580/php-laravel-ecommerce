<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    function login(Request $req){
        //get clinet input
        // $req->input();

        $user =  User::where(['email'=>$req->email])->first();
        // return $user->password;
        if(!$user || !Hash::check($req->password,$user->password)){
            return "username or password didnot match";
        }else{
            $req->session()->put("user",$user); //set session key and value
            return redirect('/');
        }
    }
}
