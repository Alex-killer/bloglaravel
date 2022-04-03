<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\StoreRequest;
use App\Http\Requests\Tag\UpdateRequest;
use App\Models\Tag;
use App\Services\TagService;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public $service;

    public function __construct(TagService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $tags = Tag ::paginate(10);

        return view('admin.tag.index', compact('tags'));
    }

    public function create()
    {
        $tags = Tag ::all();

        return view('admin.tag.create', compact('tags'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
//        Tag ::firstOrCreate($data);

        return redirect()->route('admin.tag.index');
    }

    public function show(Tag $tag)
    {
        return view('admin.tag.show', compact('tag'));
    }

    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }

    public function update(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag = $this->service->update($tag, $data);
//        $tag->update($data);
        return redirect()->route('admin.tag.index', compact('tag'));
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tag.index');
    }
}
