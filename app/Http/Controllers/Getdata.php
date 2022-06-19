<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userdata;

class Getdata extends Controller
{
    function getdatabase(){
        $data = userdata::all();
        return view('upload',['data'=>$data]);
    }
}
