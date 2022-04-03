<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::all();
        $categories = Category::all();
        $users = User::all();
        $tags = Tag::all();

        return view('admin.index', compact('posts', 'categories', 'users', 'tags'));
    }
}
