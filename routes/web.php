<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KlaviyoController;

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

Route::get('/add-post', [PostController::class, 'addPost'])->name('add-post');
Route::post('create-post',[PostController::class,'createPost'])->name('create-post');
Route::get('/update-post/{id}',[PostController::class,'updatePost'])->name('update-post');
Route::post('post-updated/{id}',[PostController::class,'postUpdated'])->name('post.updated');
Route::get('/posts',[PostController::class,'getPost'])->name('posts.index');
Route::get('/posts/{id}',[PostController::class,'getPostById']);
Route::get('/posts-delete/{id}',[PostController::class,'deletePost']);


