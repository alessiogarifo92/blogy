<?php

namespace App\Http\Controllers\categories;

use App\Http\Controllers\Controller;
use App\Models\post\PostModel;
use Illuminate\Http\Request;
use App\Models\post\Category;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{

    public function category($categoryName)
    {

        // $category = Category::where("name","like","%".$categoryName."%")->first();
        $post = PostModel::where("category", $categoryName)
            ->take(5)->orderBy('created_at', 'desc')->get();

        //sezione categorie
        $categories = DB::table("categories")
            ->join('posts', 'posts.category', '=', 'categories.name')
            ->select('categories.name AS name', 'categories.id AS id', 'posts.user_id AS user_id', DB::raw('COUNT(posts.category) AS total'))
            ->groupBy('posts.category')
            ->get();

        //popular post
        $popularPosts = PostModel::take(3)->orderBy("id", "desc")->get();

        return view("categories.category", compact("categoryName", "post", "categories","popularPosts"));
    }

}
