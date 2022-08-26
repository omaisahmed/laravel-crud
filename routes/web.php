<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RedirectionController;
use App\Http\Controllers\KlaviyoController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PartnersController;
use Spatie\Honeypot\ProtectAgainstSpam;

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
Route::post('create-post',[PostController::class,'createPost'])->name('create-post')->middleware(ProtectAgainstSpam::class);
Route::get('/update-post/{id}',[PostController::class,'updatePost'])->name('update-post');
Route::post('post-updated/{id}',[PostController::class,'postUpdated'])->name('post.updated');
Route::get('/posts',[PostController::class,'getPost'])->name('posts.index');
Route::get('/posts/{id}',[PostController::class,'getPostById']);
Route::get('/posts-delete/{id}',[PostController::class,'deletePost']);

Route::get('/search',[PostController::class,'searchIndex']);
Route::get('/search-post',[PostController::class,'searchPost'])->name('search.filter');

// For Database Relationships 
Route::get('/cars',[CarsController::class,'getCars'])->name('cars.index');
Route::get('/cars/{id}',[CarsController::class,'getCarsById']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[RedirectionController::class,'redirection'])->name('redirection');

Route::get('/klaviyo',[KlaviyoController::class,'klaviyoSms']);

// Route::view('/about','pages.about');

Route::get('/{pages}', PagesController::class)->name('pages')->where('pages','about|contact|terms');


Route::get('/partners', [PartnersController::class,'partners_directory'])->name('site.partners_directory');
Route::get('/partners/{company_name}',[PartnersController::class,'partners_company'])->name('site.partners_company');
Route::get('/partners/category/{tag_name1}',[PartnersController::class,'partners_category_tag1'])->name('site.partners_category_tag1');
Route::get('/partners/category/{tag_name2}',[PartnersController::class,'partners_category_tag2'])->name('site.partners_category_tag2');

// Partners Dashboard
Route::group(['prefix' => 'partner'], function () {
   Route::get('/dashboard', [PartnersController::class,'partners_dashboard'])->name('site.partners-dashboard');
   Route::get('/create', [PartnersController::class,'partners_dashboard_add'])->name('site.partners-dashboard-add');
   Route::post('create', [PartnersController::class,'partners_dashboard_submit_add'])->name('site.partners-dashboard-submit-add');
   Route::get('/edit/{id}', [PartnersController::class,'partners_dashboard_edit'])->name('site.partners-dashboard-edit');
   Route::post('update/{id}', [PartnersController::class,'partners_dashboard_updated'])->name('site.partners-dashboard-updated');
   Route::get('/delete/{id}', [PartnersController::class,'partners_dashboard_delete'])->name('site.partners-dashboard-delete');
});
// Partners Dashboard

