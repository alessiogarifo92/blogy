<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\posts\PostsController::class, 'index'])->name('welcome');
Route::get('/home', [App\Http\Controllers\posts\PostsController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\posts\PostsController::class, 'contact'])->name('contact');
Route::get('/about', [App\Http\Controllers\posts\PostsController::class, 'about'])->name('about');

Route::group(['prefix' => 'posts'], function () {

    Route::get('/index', [App\Http\Controllers\posts\PostsController::class, 'index'])->name('posts.index');
    Route::get('/single/{id}', [App\Http\Controllers\posts\PostsController::class, 'single'])->name('posts.single');

    //store comment
    Route::post('/comment/store', [App\Http\Controllers\posts\PostsController::class, 'storeComment'])->name('comment.store');

    //create
    Route::get('/create-post', [App\Http\Controllers\posts\PostsController::class, 'createPost'])->name('posts.create');

    //store
    Route::post('/store-post', [App\Http\Controllers\posts\PostsController::class, 'storePost'])->name('posts.store');

    //delete
    Route::get('/delete-post/{id}', [App\Http\Controllers\posts\PostsController::class, 'deletePost'])->name('posts.delete');

    //update
    Route::get('/edit-post/{id}', [App\Http\Controllers\posts\PostsController::class, 'editPost'])->name('posts.edit');
    Route::post('/update-post/{id}', [App\Http\Controllers\posts\PostsController::class, 'updatePost'])->name('posts.update');

    //searchbar
    Route::any('/search', [App\Http\Controllers\posts\PostsController::class, 'search'])->name('posts.search');

});

Route::group(['prefix' => 'categories'], function () {

    //categories
    Route::get('/category/{categoryName}', [App\Http\Controllers\categories\CategoriesController::class, 'category'])->name('category.single');

});


Route::group(['prefix' => 'users'], function () {

    Route::get('/edit/{userId}', [App\Http\Controllers\Users\UsersController::class, 'editProfile'])->name('users.edit');
    Route::post('/update/{userId}', [App\Http\Controllers\Users\UsersController::class, 'updateProfile'])->name('users.update');

    Route::get('/show/{userId}', [App\Http\Controllers\Users\UsersController::class, 'profile'])->name('users.show');

});

//check with middleware if admin already authorized or not
Route::get('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'viewLogin'])->name('admins.login')->middleware('checkForAuth');
Route::post('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'checkLogin'])->name('admins.check.login');

//add the middleware because I can see the dashboard just if I already logged in
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {

    Route::get('/dashboard', [App\Http\Controllers\Admins\AdminsController::class, 'adminDashboard'])->name('admins.dashboard');

    //admins info panel
    Route::get('/admins', [App\Http\Controllers\Admins\AdminsController::class, 'adminsShow'])->name('admins.adminsShow');

    Route::get('/create-admins', [App\Http\Controllers\Admins\AdminsController::class, 'createAdmins'])->name('admins.create');
    Route::post('/create-admins', [App\Http\Controllers\Admins\AdminsController::class, 'storeAdmins'])->name('admins.store');



    //categories info panel
    Route::get('/show-categories', [App\Http\Controllers\Admins\AdminsController::class, 'categoriesShow'])->name('admins.categoriesShow');

    Route::get('/create-categories', [App\Http\Controllers\Admins\AdminsController::class, 'createCategory'])->name('admins.category.create');
    Route::post('/create-categories', [App\Http\Controllers\Admins\AdminsController::class, 'storeCategory'])->name('admins.category.store');

    Route::get('/edit-categories/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'categoryEdit'])->name('admins.category.edit');
    Route::post('/update-categories/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'updateCategory'])->name('admins.category.update');

    Route::get('/delete-categories/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'deleteCategory'])->name('admins.category.delete');


    //posts info panel
    Route::get('/show-posts', [App\Http\Controllers\Admins\AdminsController::class, 'postsShow'])->name('admins.postsShow');

    Route::get('/delete-posts/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'deletePost'])->name('admins.post.delete');
});