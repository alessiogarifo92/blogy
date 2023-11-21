<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\post\PostModel;

class UsersController extends Controller
{
    public function editProfile($id)
    {
        $user = User::find($id);

        if (auth()->user()) {

            if (Auth::user()->id == $user->id) {
                return view("users.update-profile", compact("user"));
            } else {
                abort('404');
            }
        } else {
            abort('404');
        }
    }

    public function updateProfile(Request $request, $id)
    {
        $updateProfile = User::find($id);

        $validation = Request()->validate([
            "name" => "required|max:20",
            "email" => "required|max:40",
            "description" => "required|max:300",
        ]);

        if ($validation) {

            $updateProfile->update($request->all());

            if ($updateProfile) {

                return redirect()->route("users.edit", $id)->with("success", "Profile updated!");
            }
        }
    }

    public function profile($id)
    {

        //profile user info
        $profile = User::find($id);

        //popular post
        $popularPosts = PostModel::take(3)->orderBy("id", "desc")->get();


        return view('users.profile', compact('profile','popularPosts'));

    }

}
