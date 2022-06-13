<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function store(Request $request)
    {
        $tbl_admin = new Admin;

        $tbl_admin->admin_fullname = $request->fullname;
        $tbl_admin->admin_username = $request->name;
        $tbl_admin->admin_password = $request->password;
        $tbl_admin->save();
        return redirect('/adminpanel');

        // dd($request->fullname);
    }
}
