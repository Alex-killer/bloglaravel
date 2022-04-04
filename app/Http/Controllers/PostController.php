<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::paginate(9);
        $randomPosts = Post::get()->random(4);
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(6);
        return view('post.index', compact('posts', 'randomPosts', 'likedPosts'));
    }

    public function show(Post $post) {
        return view('post.show', compact('post'));
    }
}
