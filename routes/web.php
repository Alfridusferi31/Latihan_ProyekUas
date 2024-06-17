<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{id}/view', [PostController::class, 'view'])->name('posts.view');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

?>
