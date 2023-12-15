<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminController;
use App\Mail\RequestRoleMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });

// use App\Http\Controllers\PublicController;
Route::get('/', [PublicController::class,'home'])->name('home');
// use App\Http\Controllers\ArticleController;
route::get('/article/create', [ArticleController::class, 'create'])->name('articles.create');
route::post('/article/store', [ArticleController::class, 'store'])->name('articles.store');
route::get('/articles/{article}/show',[ArticleController::class,'show'])->name('articles.show');
route::get('/articles/{category}/index',[ArticleController::class,'articlesByCategory'])->name('articles.category');
route::get('/work-with-us',[PublicController::class,'workWithUs'])->name('work.with.us');
route::post('/user/send-role-request',[PublicController::class,'sendRoleRequest'])->name('user.role.request');
route::middleware('admin')->group(function(){
    route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
});
route::middleware('admin')->group(function(){
    route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    route::get('/admin/{user}/set-revisor',[AdminController::class,'makeUserRevisor'])->name('admin.makeUserRevisor');
    route::get('/admin/{user}/set-admin',[AdminController::class,'makeUserAdmin'])->name('admin.makeUserAdmin');
    route::get('/admin/{user}/set-writer',[AdminController::class,'makeUserWriter'])->name('admin.makeUserWriter');
});