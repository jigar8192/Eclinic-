<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class registationcontroller extends Controller
{
    //
    function getData(Request $req){
        // $req->validate([
        //     'name'=>'required | min:3 | max:10',
        //     'Password'=>'required | min:5 | max:10'
        // ]);

        $user = new User;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = hash::make($req->input('password'));
        $user->gender = $req->input('r1');
        $user->save();
        // return $req;
        return $req->input();
        // echo "form submmited";
    }
}
