<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
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
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.post.create', compact('posts', 'categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'category_id' => '',
            'tag_id' => '',
            'user_id' => '',
        ]);
        $tags = $data['tag_id'];
        unset($data['tag_id']);

        $post = Post::create($data);

        $post->tags()->attach($tags); // привязываем к конкретному посту теги, через модель Post  и связующую таблицу pivot(tags)

        return redirect()->route('admin.post.index');
    }

    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'string',
            'category_id' => '',
            'tag_id' => '',
            'user_id' => '',
        ]);
        $tags = $data['tag_id'];
        unset($data['tag_id']);

        $post->update($data);
        $post->tags()->sync($tags); // удаление всех предыдущих тегов и добавление новых
        return redirect()->route('admin.post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
