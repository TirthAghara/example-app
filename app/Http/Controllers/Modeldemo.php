<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Modeldemo extends Controller
{
    function getModel()
    {
        return User::all();
    }
}
