<?php

namespace App\Http\Controllers;
use Illuminate\Http\Facsdes\DB;
use Illuminate\Http\Request;
use App\Models\Studentinfoo;


class DeviceController extends Controller
{
    public function Searchdata($firstname)
    {
        $Device = Studentinfoo::find($firstname);
        return Device::where("firstname",$firstname);
    }
}