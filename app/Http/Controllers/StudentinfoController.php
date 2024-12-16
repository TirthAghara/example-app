<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Studentinfoo;

class StudentinfoController extends Controller
{
    function Student()
    {
        return Studentinfoo::find(1)->StudentData;
    }
}
