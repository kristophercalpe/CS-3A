<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterFormRequest;
use App\Models\Register;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function store(RegisterFormRequest $request)
    {
        try{
            $data = $request->validated();
            $tbl_user = new Register;

            //table name->column name = $request->name of input fields
            $tbl_user->user_fullname = $request->fullname;
            $tbl_user->user_username = $request->username;
            $tbl_user->user_email = $request->email;
            $tbl_user->user_password = $request->password;
            $tbl_user->save();
            //change redirect to /login
            return redirect('/home');

        }
        catch(\Exception $e){
            return redirect('/register')->with('message', 'Something Went Wrong.'.$e);
        } 
    }

    public function index()
    {
        return view('auth.register');
    }

  
    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UserProfile $user
     * @return \Illuminate\Http\Response
     */
    
}
