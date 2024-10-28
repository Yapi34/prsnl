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
    // Method untuk menampilkan form edit
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Method untuk memperbarui post
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

    $post->update($request->all());

    return redirect()->route('posts.index');
    }

    // Method untuk menghapus post
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

}
