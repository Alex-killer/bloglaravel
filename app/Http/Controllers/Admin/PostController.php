<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);

        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $posts = Post::all();

        return view('admin.post.create', compact('posts'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'category_id' => 'string',
            'user_id' => 'string',
        ]);

        Post::create($data);
        return redirect()->route('admin.post.index');
    }

    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'category_id' => 'string',
            'user_id' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('admin.post.show', $post->id);
    }
}
