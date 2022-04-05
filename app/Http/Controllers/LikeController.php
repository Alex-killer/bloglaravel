<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Post $post)
    {
        auth()->user()->LikedPosts()->toggle($post->id);

        return redirect()->back();
    }
}
