<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = $this->getCategories();
        return view('categories', [
            'categories' => $categories
        ]);
    }

    public function show(int $categoryId)
    {
        $categoryNews = DB::table('news')->where('category_id', '=', $categoryId)->get();

        return view('categoryNews', [
            'categoryNews' => $categoryNews
        ]);
    }
}
