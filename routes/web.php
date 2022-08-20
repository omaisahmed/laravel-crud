<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RedirectionController;
use App\Http\Controllers\KlaviyoController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CarsController;

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

Route::get('/search',[PostController::class,'searchIndex']);
Route::post('/search-post',[PostController::class,'searchPost'])->name('search.filter');

// For Database Relationships 
Route::get('/cars',[CarsController::class,'getCars'])->name('cars.index');
Route::get('/cars/{id}',[CarsController::class,'getCarsById']);


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[RedirectionController::class,'redirection'])->name('redirection');

Route::get('/klaviyo',[KlaviyoController::class,'klaviyoSms']);

// Route::view('/about','pages.about');

Route::get('/{pages}', PagesController::class)->name('pages')->where('pages','about|contact|terms');