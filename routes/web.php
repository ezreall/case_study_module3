<?php

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

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CommentController;

//use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\ShowAllBlogController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

route::get('/', 'AdminController@getLogin')->middleware('guest:admin')->name('admin');
route::post('/', 'AdminController@postLogin')->middleware('guest:admin')->name('account');
Route::get('auth/google', 'AdminController@redirectToGoogle')->name('login.google');
Route::get('auth/google/callback', 'AdminController@handleGoogleCallback')->name('google');
Route::get('/register', [AccountController::class, 'create'])->name('create.register');
Route::post('/register', [AccountController::class, 'store'])->name('store.register');
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('', [ShowAllBlogController::class, 'ShowListAll'])->name('AllList');
    Route::prefix('/categories')->group(function () {
        Route::get('/', [CategoriesController::class, 'index'])->name('categories');
        Route::get('/create', [CategoriesController::class, 'create'])->name('create.categories');
        Route::post('/store', [CategoriesController::class, 'store'])->name('store.categories');
        Route::get('/{id}/edit', [CategoriesController::class, 'edit'])->name('edit.category');
        Route::post('/{id}/update', [CategoriesController::class, 'update'])->name('update');
        Route::get('{id}/delete', [CategoriesController::class, 'delete'])->name('delete.category');
    });

    Route::prefix('articles')->group(function () {
        Route::get('/', [ArticlesController::class, 'index'])->name('articles');
        Route::get('/create', [ArticlesController::class, 'create'])->name('create.articles');
        Route::post('/store', [ArticlesController::class, 'store'])->name('store.articles');
        Route::get('/{id}/edit', [ArticlesController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [ArticlesController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [ArticlesController::class, 'delete'])->name('delete');
    });
});
Route::get('/logout', 'AdminControllerr@logout');
Route:: prefix('blogs')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/detail/{id}', [ArticlesController::class, 'detail'])->name('article.detail');
    Route::post('/comment/{id}', [CommentController::class, 'store'])->name('comment.store');
    Route::get('/one_category/{id}', [CategoriesController::class, 'category_articles'])->name('category_articles');
});


