<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function show(int $id)
    {
        $news = $this->getOneNews($id);

        return view('news', [
            'news' => $news
        ]);
    }
}
