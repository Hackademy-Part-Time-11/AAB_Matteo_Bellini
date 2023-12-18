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
    route::post('/tag/store', [AdminController::class, 'storeTag'])->name('tag.store');
    Route::post('/category/{category}/update', [AdminController::class, 'editCategory'])->name('category.edit');
    Route::delete('/category/{category}/delete', [AdminController::class, 'deleteCategory'])->name('category.delete');
    Route::post('/category/store', [AdminController::class, 'storeCategory'])->name('category.store');
});
Route::middleware('writer')->group(function(){
Route::get('/article/create', [ArticleController::class, 'create']) ->name('article.create');
Route::get('/article/store',[ArticleController::class, 'store'])->name('article.store');
route::get('/article/dashboard',[ArticleController::class,'article_dashboard'])->name('article.dashboard');
route::get('/article/{article}/edit}',[ArticleController::class,'edit'])->name('article.edit');
route::get('/article/{article}/update}',[ArticleController::class,'update'])->name('article.update');
route::get('/article/{article}/delete}',[ArticleController::class,'destroy'])->name('article.delete');

});
route::middleware('revisor')->group(function(){
    route::get('/revisor/dashboard',[RevisorController::class,'revisorDashboard'])->name('revisor.dashboard');
    route::get('/revisor/article/{article}/detail',[RevisorController::class,'articleDetail'])->name('revisor.detail');
    route::get('/revisor/article/{article}/accept',[RevisorController::class,'acceptArticle'])->name('revisor.accept');
    route::get('/revisor/article/{article}/reject',[RevisorController::class,'rejectArticle'])->name('revisor.reject');
});

Route::get('/article/search', [PublicController::class, 'searchArticle'])->name('serach.articles');
Route::post('/tag/{tag}/update',[AdminController::class, 'editTag'])->name('tag.edit');
Route::delete('/tag/{tag}/delete', [AdminController::class, 'deleteTag'])->name('tag.delete');
