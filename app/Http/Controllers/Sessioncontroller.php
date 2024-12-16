<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sessioncontroller extends Controller
{
    function login(Request $req)
    {
        $data= $req->input();
        $req->session()->put('user',$data['user']);
        $req->session()->put('password',$data['password']);     

        return redirect('profile');
    }
}
