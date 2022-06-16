<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index()
    {
        $xml = XmlParser::load('https://news.un.org/feed/subscribe/ru/news/all/rss.xml');
        $data = $xml->parse([
            'news' => [
                'uses' => 'channel.item[description]'
            ]
        ]);

        $news = array_map(function($singleNews) {
            return [
                'category_id' => 1,
                'source_id' => 1,
                'text' => $singleNews['description']
            ];
        }, $data['news']);

        News::insert($news);
    }
}
