<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = $this->getCategories();
        return view('categories', [
            'categories' => $categories
        ]);
    }

    public function show(string $category)
    {
        $news = $this->getNews();

        $categoryNews = [];
        foreach ($news as $item) {
            if ($item['category'] == $category) {
                $categoryNews[] = $item;
            }
        }

        return view('categoryNews', [
            'categoryNews' => $categoryNews
        ]);
    }
}
