<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminFormRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function store(AdminFormRequest $request)
    {
        try{
            $data = $request->validated();
            $tbl_admin = new Admin;

            //table name->column name = $request->name of input fields
            $tbl_admin->admin_fullname = $request->fullname;
            $tbl_admin->admin_username = $request->name;
            $tbl_admin->admin_password = $request->password;
            $tbl_admin->save();
            return redirect('/adminpanel')->with('message', 'Admin Added Successfully.');

        }
        catch(\Exception $e){
            return redirect('/adminpanel')->with('message', 'Something Went Wrong.'.$e);
        } 


    }
  
    public function index()
    {
        $admin = Admin::get();
        return view('adminpanel', ['admins'=>$admin]);
    }

    public function edit(Admin $admin)
    {
        // dd($admin);
        return view('/edit', compact('admin'));
    }
    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function update(AdminFormRequest $request, Admin $admin)
    {
        $data = $request->validated();
        $admin->admin_fullname = $request->fullname;
        $admin->admin_username = $request->name;
        $admin->admin_password = $request->password;
        $admin->save();
        return redirect('/adminpanel')->with('message', 'Admin Updated Successfully.');
    }
    public function delete($admin_id)
    {
        $adminK = Admin::whereadmin_id($admin_id)->first();

        $adminK->delete();
        return redirect('/adminpanel')->with('message', 'Admin Deleted Successfully.');
    }


    public function adminPage()
    {
        return view('admin');
    }

    public function adminloginFinal(Request $request)
    {
        $password = DB::table('tbl_admin')->where('admin_username', $request->AdminUsername)->value('admin_password');
        // echo $password;
        if($password==$request->AdminPassword)
        {
            return redirect('/adminpanel');
        }
        else
        {
            return redirect('/adminlogin')->with('message1', 'Credentials not found');
        }

    }

}
