<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function show(int $id)
    {
        $newsList = $this->getNews();

        return view('news', [
            'news' => $newsList[$id - 1]
        ]);
    }
}
