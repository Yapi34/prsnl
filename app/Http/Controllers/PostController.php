<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
    return view('posts.create');
    }

    // Method untuk menyimpan Post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    // Method untuk menampilkan semua Post
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
