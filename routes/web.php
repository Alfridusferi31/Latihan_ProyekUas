<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk posts dengan menggunakan resource controller kecuali 'show'
Route::resource('posts', PostController::class)->except(['show']);

// Rute khusus untuk view, edit, dan update
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{post}/view', [PostController::class, 'view'])->name('posts.view');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::get('/login', [PostController::class, 'login'])->name('posts.login');
Route::get('/pdf', [PostController::class, 'generatePDF'])->name('posts.pdf');
?>