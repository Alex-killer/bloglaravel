<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostUserLike;

class HomeController extends Controller
{
    public function index()
    {
        $comments = auth()->user()->comments;
        return view('personal.index', compact('comments'));
    }
}
