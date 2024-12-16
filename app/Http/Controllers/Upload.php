<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Upload extends Controller
{
    public function store(Request $request)
    {

        // return $request->file('image')->store('images');
       
    }
    function data()
    {
        return ["name"=>"tirth"];
    }
}


