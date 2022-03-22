<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::paginate(9);

        return view('admin.post.index', compact('posts'));
    }

    public function create() {

        return view('admin.post.create');
    }
}
