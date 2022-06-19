<?php

namespace App\Http\Controllers;
use App\Models\userdata;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getData(){
        $texts = new userdata;
        $texts->Texts = request('texts');
        $texts->save();
        return redirect('/upload');
    }
}