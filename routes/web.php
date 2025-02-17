<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', [PostController::class, 'index'])->name('post.index');
Route::post('posts', [PostController::class, 'store'])->name('post.store');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('posts/{post}/update', [PostController::class, 'update'])->name('post.update');
Route::delete('posts/{post}/destroy', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('posts/create', [PostController::class, 'create'])->name('post.create');
Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');
