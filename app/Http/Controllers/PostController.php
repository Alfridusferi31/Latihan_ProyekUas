<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        return view('posts.index');
    }
    public function create()
    {
        return view('posts.create');
    }

    public function view(): View
    {
        Log::info('View method called'); // Ini akan mencatat informasi di log
        return view('posts.view');
    }

    public function edit(): View
    {
        Log::info('Edit method called');
        return view('posts.edit');
    }

    public function login(): View
    {
        Log::info('Login method called');
        return view('posts.login');
    }
}
