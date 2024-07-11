<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
class PostController extends Controller
{
   
    public function index(): View
    {
        $posts = Post::latest()->paginate(2);
        return view('posts.index', ['posts' => $posts]);
    }
    public function generatePDF()
    {
        $posts = Post::all();
        $pdf = PDF::loadView('posts.pdf', compact('posts'));
        return $pdf->download('posts.pdf');
    }
    public function show($id)
    {
    $post = Post::findOrFail($id);

    return view('posts.show', ['post' => $post]);
    }


    public function create()
    {
        return view('posts.create');
    }

    public function view(Post $post): View
    {
        Log::info('View method called');
        return view('posts.view', ['post' => $post]);
    }

    public function edit(Post $post): View
    {
        Log::info('Edit method called');
        return view('posts.edit', ['post' => $post]);
    }

    public function login(): View
    {
        Log::info('Login method called');
        return view('posts.login');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,ico|max:2048'
        ]);

        $post = new Post();
        $post->title = $validate['title'];
        $post->content = $validate['content'];

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('images', 'public');
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    }

    public function update(Request $request, Post $post)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,ico|max:2048'
        ]);

        $post->title = $validate['title'];
        $post->content = $validate['content'];

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('images', 'public');
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}