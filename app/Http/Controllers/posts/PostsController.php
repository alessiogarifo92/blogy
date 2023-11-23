<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use App\Models\post\Category;
use App\Models\post\Comment;
use App\Models\post\PostModel;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{


   public function index()
   {

      //first section
      $posts = PostModel::inRandomOrder()->limit(2)->get();
      //collect all postsIds so that I can avoid display the same posts more times
      $postsIds = $posts->pluck('id')->toArray();

      $postOne = PostModel::inRandomOrder()->whereNotIn('id', $postsIds)->limit(1)->get();
      $postsIds = array_merge($postsIds, $postOne->pluck('id')->toArray());

      $postTwo = PostModel::inRandomOrder()->whereNotIn('id', $postsIds)->limit(2)->get();


      //business section
      $postBusiness = PostModel::where('category', 'Business')->take(2)->get();
      $postBusinessTwo = PostModel::where('category', 'Business')->take(3)->orderBy('title', 'desc')->get();


      //random posts section
      $randomPosts = PostModel::take(4)->orderBy('category', 'desc')->get();


      //culture section
      $postCulture = PostModel::where('category', 'Culture')->take(2)->get();
      $postCultureTwo = PostModel::where('category', 'Culture')->take(3)->orderBy('title', 'desc')->get();

      //politics section
      $postPolitics = PostModel::where('category', 'Politics')->take(9)->get();

      //travel section
      $postTravel = PostModel::where('category', 'Travel')->take(1)->orderBy('title', 'desc')->get();
      $postTravelOne = PostModel::where('category', 'Travel')->take(1)->orderBy('id', 'desc')->get();
      $postTravelTwo = PostModel::where('category', 'Travel')->take(2)->orderBy('created_at', 'desc')->get();


      return view("posts.index", compact("posts", "postOne", "postTwo", "postBusiness", "postBusinessTwo", "randomPosts", "postCulture", "postCultureTwo", "postPolitics", "postTravel", "postTravelOne", "postTravelTwo"));
   }

   public function single($id)
   {
      $post = PostModel::find($id);
      $user = User::find($post->user_id);

      //popular post
      $popularPosts = PostModel::take(3)->orderBy("id", "desc")->get();

      $categories = DB::table("categories")
         ->join('posts', 'posts.category', '=', 'categories.name')
         ->select('categories.name AS name', 'categories.id AS id', 'posts.user_id AS user_id', DB::raw('COUNT(posts.category) AS total'))
         ->groupBy('posts.category')
         ->get();

      // print_r($categories);

      //comments
      $comments = Comment::where('post_id', $id)->get();

      // $commentsCount = count($comments);
      $commentsCount = $comments->count();

      $moreBlogs = PostModel::where('category', $post->category)
         ->where('id', '!=', $id)
         ->take(4)
         ->get();

      // $countBlogs = count($moreBlogs);
      $countBlogs = $moreBlogs->count();

      return view("posts.single", compact("post", "user", "popularPosts", "categories", "comments", "commentsCount", "moreBlogs", "countBlogs"));
   }

   public function storeComment(Request $request)
   {
      $insertComment = Comment::create([
         "comment" => $request->comment,
         "user_id" => Auth::user()->id,
         "user_name" => Auth::user()->name,
         "post_id" => $request->post_id,
      ]);

      return redirect()->route('posts.single', $request->post_id)->with("success", "New comment added");
   }


   public function createPost()
   {
      if (auth()->user()) {

         $categories = Category::select("name")->get();

         return view("posts.create-post", compact('categories'));
      } else {
         return abort(404);
      }
   }

   public function storePost(Request $request)
   {

      $destinationPath = 'assets/images/';
      $myimage = $request->image->getClientOriginalName();
      $request->image->move(public_path($destinationPath), $myimage);


      $insertPost = PostModel::create([
         "title" => $request->title,
         "category" => $request->category,
         "user_id" => Auth::user()->id,
         "user_name" => Auth::user()->name,
         "image" => $myimage,
         "description" => $request->description,
      ]);

      $lastInsertedId = $insertPost->id;

      return redirect()->route('posts.single', $lastInsertedId)->with("success", "New post added");
   }

   public function deletePost($id)
   {

      $deletePost = PostModel::find($id);
      $deletePost->delete();

      return redirect()->route("posts.index")->with("delete", "Post successfully deleted");
   }

   public function editPost($id)
   {
      //controllo per non far accedere alla pagina di edit da url
      if (auth()->user()) {

         $post = PostModel::find($id);
         $categories = Category::select("name")->get();
         if (Auth::user()->id == $post->user_id) {
            return view("posts.edit-post", compact('post', 'categories'));

         } else {
            return abort('404');
         }

      } else {
         return abort('404');
      }

   }

   public function updatePost(Request $request, $id)
   {

      $updatePost = PostModel::find($id);

      $validation = Request()->validate([
         "title" => "required|max:80",
         "category" => "required",
         "description" => "required|max:900",
      ]);

      if ($validation) {

         $updatePost->update($request->all());

         if ($updatePost) {
            return redirect()->route("posts.single", $id)->with("update", "Post successfully updated");

         }
      }


   }

   public function search(Request $request)
   {

      $search = $request->get('search');

      $results = PostModel::where('title', 'like', '%' .$search . '%')->get();

      return view("pages.search", compact('search', 'results'));
   }

   public function contact()
   {
      return view("pages.contact");
   }

   public function about()
   {
      return view("pages.about");
   }


}
