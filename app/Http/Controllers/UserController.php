<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// password secret
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
   function register( Request $req)

   {
    $user= new User;
    $user->name=$req->input('name');
    $user->email=$req->input('email');
    $user->password=Hash::make($req->input('password'));
    $user->save();

    return $user;
   }
}

//syntax- function -function name(lowercase)
//(Request $req)
// return $req->input()