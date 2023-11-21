<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\post\Category;
use App\Models\post\PostModel;
use Illuminate\Http\Request;

class AdminsController extends Controller
{

    public function viewLogin()
    {

        return view('admins.login-admins');

    }

    public function checkLogin(Request $request)
    {

        $validation = Request()->validate([

            "email" => "required",
            "password" => "required",
         ]);

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {

            return redirect()->route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);

    }

    public function adminDashboard()
    {

        $postsCount = PostModel::all()->count();

        $categoriesCount = Category::all()->count();

        $adminsCount = Admin::all()->count();

        

        return view('admins.admin-dashboard', compact('postsCount','categoriesCount','adminsCount'));

    }
}
