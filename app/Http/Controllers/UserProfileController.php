<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserProfileFormRequest;
use App\Models\UserProfile;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function store(UserProfileFormRequest $request)
    {
        try{
            $data = $request->validated();
            $tbl_user = new UserProfile;

            //table name->column name = $request->name of input fields
            $tbl_user->user_fullname = $request->fullname;
            $tbl_user->user_username = $request->username;
            $tbl_user->user_email = $request->email;
            $tbl_user->user_password = $request->password;
            $tbl_user->save();
            return redirect('/profile')->with('message', 'User Added Successfully.');

        }
        catch(\Exception $e){
            return redirect('/profile')->with('message', 'Something Went Wrong.'.$e);
        } 
    }

    public function index()
    {
        $user = UserProfile::get();
        return view('profile', ['users'=>$user]);
    }

    public function edit(UserProfile $user)
    {
        // dd($admin);
        return view('/view', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UserProfile $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserProfileFormRequest $request, UserProfile $user)
    {
        $data = $request->validated();
        $user->user_fullname = $request->fullname;
        $user->user_username = $request->username;
        $user->user_email = $request->email;
        $user->user_password = $request->password;
        $user->save();
        return redirect('/profile')->with('message', 'User Updated Successfully.');
    }
    public function delete($user_id)
    {
        $user = UserProfile::whereuser_id($user_id)->first();

        $user->delete();
        return redirect('/profile')->with('message', 'User Deleted Successfully.');; 
    }

    public function userPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $password = DB::table('tbl_user')->where('user_email', $request->email)->value('user_password');
        // echo $password;
        if($password==$request->password)
        {
            return redirect('/home');
        }
        else
        {
            return redirect('/login')->with('message1', 'Credentials not found');
        }
    }

}
