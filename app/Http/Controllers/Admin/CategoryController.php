<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use App\Services\Category\Service;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $categories = Category::paginate(10);

        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.category.create', compact('categories'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
//        Category::firstOrCreate($data);

        return redirect()->route('admin.category.index');
    }

    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category = $this->service->update($category, $data);
//        $category->update($data);
        return redirect()->route('admin.category.index', compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
