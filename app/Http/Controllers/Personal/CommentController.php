<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        $comments = auth()->user()->comments;
        return view('personal.comment.index', compact('comments'));
    }
}
