<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Support\Facades\Route;



Route::get('/', [PostController::class, 'index'])->name('home');


//Route::prefix('admin')->group(function () {
//    Route:get('/posts', [AdminController::class,'index'])->name('posts.index');
//    Route::post('/posts', [AdminController::class,'store'])->name('posts.store');
//
//});

Route::get('admin/posts', [AdminController::class, 'index'])->name('posts.index');
Route::post('admin/posts', [AdminController::class, 'store'])->name('posts.store');
Route::get('admin/posts/create', [AdminController::class, 'create'])->name('posts.create');
Route::put('admin/posts/{post}', [AdminController::class, 'update'])->name('posts.update');
Route::delete('admin/posts/{post}', [AdminController::class, 'destroy'])->name('posts.destroy');
