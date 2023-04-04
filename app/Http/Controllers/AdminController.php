<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('create_admin');
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'admin_username' => 'required|unique:admins,admin_user',
            'admin_password'=> 'required',
            'confirm_password' => 'same:admin_password'
        ]);

        $admin_username = $request->admin_username;
        $admin_password = $request->admin_password;

        $db_admin = new \App\Models\Admin;
        $db_admin->admin_user = $admin_username;
        $db_admin->admin_password = $admin_password;

        $db_admin->save();
        return view('admin_login');
    }
}
