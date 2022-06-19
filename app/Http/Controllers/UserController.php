<?php

namespace App\Http\Controllers;
use App\Models\userdata;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getData(){
        $user = new userdata;
        $user->Texts = request('texts');
        $user->Name ="";
        $user->Image = "";
        $user->save(); 
        return redirect('/post');
    }
}
