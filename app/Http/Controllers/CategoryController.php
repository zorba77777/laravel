<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        $categoryNews = News::where('category_id', $category->id)->get();

        return view('categories.show', [
            'categoryNews' => $categoryNews
        ]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function edit(int $categoryId)
    {
        $category = Category::find($categoryId);
        return view('categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, Category::rules());
        $paramsToInsert = $request->except(['_token', 'submit', 'q']);
        $category->fill($paramsToInsert);
        $category->save();
        return redirect()->route('categories.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, Category::rules());
        $paramsToInsert = $request->except(['_token']);
        Category::create($paramsToInsert);
        return redirect()->route('categories.index');
    }

    public function delete(Category $category)
    {
        $category->forceDelete();
        return redirect()->route('categories.index');
    }

}
