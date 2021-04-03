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

use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('',function (){
    return view('login.login');
});

Route::prefix('admin')->group(function (){
    Route::prefix('/categories')->group(function (){
    Route::get('/',[CategoriesController::class,'index'])->name('categories');
    Route::get('/create',[CategoriesController::class,'create'])->name('create.categories');
    Route::post('/store',[CategoriesController::class,'store'])->name('store.categories');
    Route::get('edit/{id}',[CategoriesController::class,'edit'])->name('edit');
    Route::post('update/{id}',[CategoriesController::class,'update'])->name('update');
    Route::get('delete/{id}',[CategoriesController::class,'delete'])->name('delete');
    });

    Route::prefix('articles')->group(function (){
        Route::get('/',[ArticlesController::class,'index'])->name('articles');
        Route::get('/create',[ArticlesController::class,'create'])->name('create.articles');
        Route::post('/store',[ArticlesController::class,'store'])->name('store.articles');
        Route::get('/edit/{id}',[ArticlesController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[ArticlesController::class,'update'])->name('update');
        Route::get('/delete/{id}',[ArticlesController::class,'delete'])->name('delete');
    });
});
Route:: prefix('user')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/detail/{id}', [ArticlesController::class, 'detail'])->name('article.detail');
    Route::post('/comment/{id}', [CommentController::class, 'store'])->name('comment.store');
    Route::get('/one_category/{id}', [CategoriesController::class, 'category_articles'])->name('category_articles');
});
