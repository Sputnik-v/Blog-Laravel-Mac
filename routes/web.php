<?php

use App\Http\Controllers\PostController;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Support\Facades\Route;



Route::get('/', [PostController::class, 'index'])->name('home');
