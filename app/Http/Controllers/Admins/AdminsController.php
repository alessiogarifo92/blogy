<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\post\Category;
use App\Models\post\PostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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



        return view('admins.admin-dashboard', compact('postsCount', 'categoriesCount', 'adminsCount'));

    }

    //admins section
    public function adminsShow()
    {

        $admins = Admin::all();

        return view('admins.admins', compact('admins'));
    }


    public function createAdmins()
    {

        return view('admins.create-admin');
    }

    public function storeAdmins(Request $request)
    {

        $validation = Request()->validate([
            "email" => "required|max:80",
            "name" => "required",
            "password" => "required|max:70",
        ]);

        if ($validation) {

            $checkEmailAlreadyExists = Admin::where('email', $request->email)->count();

            if ($checkEmailAlreadyExists > 0) {
                return redirect()->back()->with(['error' => 'Error: admin not created. Email has been already used']);
            } else {

                $insertAdmin = Admin::create([
                    "email" => $request->email,
                    "name" => $request->name,
                    "password" => Hash::make($request->password)
                ]);

                return redirect()->route('admins.adminsShow')->with(['success' => 'Admin created successfully!']);
            }

        }


        return redirect()->back()->with(['error' => 'Error: admin not created']);
    }


    //admin categories


    public function categoriesShow()
    {

        $categories = Category::all();

        return view('admins.categories-show', compact('categories'));
    }

    public function createCategory()
    {

        return view('admins.create-category');
    }

    public function storeCategory(Request $request)
    {

        $validation = Request()->validate([
            "name" => "required",
        ]);

        if ($validation) {

            $checkNameAlreadyExists = Category::where('name', $request->name)->count();

            if ($checkNameAlreadyExists > 0) {
                return redirect()->back()->with(['error' => 'Error:category already present in list']);
            } else {

                $insertCategory = Category::create([
                    "name" => $request->name,
                ]);

                return redirect()->route('admins.categoriesShow')->with(['success' => 'Category created successfully!']);
            }

        }


        return redirect()->back()->with(['error' => 'Error: category not created']);
    }

    public function categoryEdit($id)
    {

        $category = Category::find($id);

        return view('admins.category-update', compact('category'));
    }


    public function updateCategory(Request $request, $id)
    {

        $validation = Request()->validate([
            "name" => "required",
        ]);

        if ($validation) {

            $checkNameAlreadyExists = Category::where('name', $request->name)->count();

            if ($checkNameAlreadyExists > 0) {
                return redirect()->back()->with(['error' => 'Error:category already present in list']);
            } else {
                $category = Category::find($id);
                $category->name = $request->input('name');
                $category->update();

                return redirect()->route('admins.categoriesShow')->with(['success' => 'Category updated successfully!']);
            }

        }
    }

    public function deleteCategory($id)
    {

        $deleteCategory = Category::find($id);
        $deleteCategory->delete();

        return redirect()->route('admins.categoriesShow')->with(['success' => 'Category deleted successfully!']);


    }



    //admin posts

    public function PostsShow()
    {

        $posts = PostModel::all();

        return view('admins.posts-show', compact('posts'));
    }


    public function deletePost($id)
    {

        $deletePost = PostModel::find($id);
        $deletePost->delete();

        return redirect()->route('admins.postsShow')->with(['success' => 'Post deleted successfully!']);


    }
}
