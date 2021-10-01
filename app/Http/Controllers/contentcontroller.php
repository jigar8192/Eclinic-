<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contentcontroller extends Controller
{
    //
    function home()
    {
        return view('/home');
    }
}
