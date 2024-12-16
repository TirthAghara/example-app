<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //public or private function define
     public function index($name)
    {
        // echo $name;
        // echo " hello from Controller";

        return ['name'=>"tirth",'age'=>19];
    }
}
