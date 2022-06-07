<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', [
            'news' => News::all()
        ]);
    }

    public function show(int $id)
    {
        return view('news.show', [
            'news' => News::find($id)
        ]);
    }

    public function create()
    {
        return view('news.create');
    }

    public function edit(int $newsId)
    {
        $news = News::find($newsId);
        return view('news.edit', [
            'news' => $news
        ]);
    }

    public function update(Request $request, News $news)
    {
        $paramsToInsert = $request->except(['_token', 'submit', 'q']);
        $news->fill($paramsToInsert);
        $news->save();
        return redirect()->route('news.index');
    }

    public function store(Request $request)
    {
        $paramsToInsert = $request->except(['_token']);
        News::create($paramsToInsert);
        return redirect()->route('news.index');
    }

    public function delete(News $news)
    {
        $news->forceDelete();
        return redirect()->route('news.index');
    }

}
