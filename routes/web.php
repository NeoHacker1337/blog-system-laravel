<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;

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
// Only For Front View
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('single-blog/{id}',[FrontendController::class,'singlepost'])->name('singlepost');
Route::POST('comment-save',[FrontendController::class,'commentSave'])->name('commentSave');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('home');

//AdminController
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('admin-profile',[ProfileController::class,'profileview'])->name('admin.profileview')->middleware('admin');
Route::post('admin-profile',[ProfileController::Class,'saveprofile'])->name('admin.saveprofile')->middleware('admin');
route::get('/category',[AdminController::class,'category'])->name('admin.category')->middleware('admin');
route::POST('/category',[AdminController::class,'createcategory'])->name('admin.createcategory')->middleware('admin');
route::get('/tags',[AdminController::class,'tags'])->name('admin.tags')->middleware('admin');
route::POST('/tags',[AdminController::class,'createtags'])->name('admin.createtags')->middleware('admin');
route::get('/post',[AdminController::class,'post'])->name('admin.post')->middleware('admin');
route::POST('/create-post',[AdminController::class,'createpost'])->name('admin.createpost')->middleware('admin');
