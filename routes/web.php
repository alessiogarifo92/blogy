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

Route::group(['prefix'=> 'posts'], function () {

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

});

Route::group(['prefix'=> 'categories'], function () {

    //categories
Route::get('/category/{categoryName}', [App\Http\Controllers\categories\CategoriesController::class, 'category'])->name('category.single');

});


Route::group(['prefix'=> 'users'], function () {

    Route::get('/edit/{userId}', [App\Http\Controllers\Users\UsersController::class, 'editProfile'])->name('users.edit');
    Route::post('/update/{userId}', [App\Http\Controllers\Users\UsersController::class, 'updateProfile'])->name('users.update');

});