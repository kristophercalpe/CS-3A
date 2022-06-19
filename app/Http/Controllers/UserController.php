<?php

namespace App\Http\Controllers;
use App\Models\userdata;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getData(){

        return redirect('/post');
    }

   public function store(request $request) {

    $input=$request->all();
    $images=array();
    if($files=$request->file('files')){
        foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->storeAs('TmporaryImage',$name,'public');
            $images[]=$name;
        }
    }
    /*Insert your data*/
    $users = new userdata;
    $users->Texts = request('texts');
    $users->Name =" ";
    $users::insert([
        'Image' => " ",
        'Texts' => request('texts'),
        'Name'=> " "
    ]);
    



    return redirect('/post');
}   
}
