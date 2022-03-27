<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
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
//        $this->service->store($data);
        Category::firstOrCreate($data);

        return redirect()->route('admin.category.index');
    }
}
