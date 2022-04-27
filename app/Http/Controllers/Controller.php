<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCategories(): array
    {
        return ['movie', 'sport', 'politic', 'animals', 'international'];
    }

    public function getNews(): array
    {
        $news = [];

        $news[] = [
            'id' => 1,
            'category' => 'movie',
            'text' => 'lorem'
        ];

        $news[] = [
            'id' => 2,
            'category' => 'movie',
            'text' => 'ipsum'
        ];

        $news[] = [
            'id' => 3,
            'category' => 'movie',
            'text' => 'dolor'
        ];

        $news[] = [
            'id' => 4,
            'category' => 'movie',
            'text' => 'sit'
        ];

        $news[] = [
            'id' => 5,
            'category' => 'sport',
            'text' => 'amet'
        ];

        $news[] = [
            'id' => 6,
            'category' => 'sport',
            'text' => 'consectetur'
        ];

        $news[] = [
            'id' => 7,
            'category' => 'sport',
            'text' => 'adipiscing'
        ];

        $news[] = [
            'id' => 8,
            'category' => 'sport',
            'text' => 'elit'
        ];

        $news[] = [
            'id' => 9,
            'category' => 'politic',
            'text' => 'sed'
        ];

        $news[] = [
            'id' => 10,
            'category' => 'politic',
            'text' => 'do'
        ];

        $news[] = [
            'id' => 11,
            'category' => 'politic',
            'text' => 'eiusmod'
        ];

        $news[] = [
            'id' => 12,
            'category' => 'politic',
            'text' => 'tempor'
        ];

        $news[] = [
            'id' => 13,
            'category' => 'animals',
            'text' => 'incididunt'
        ];

        $news[] = [
            'id' => 14,
            'category' => 'animals',
            'text' => 'ut'
        ];

        $news[] = [
            'id' => 15,
            'category' => 'animals',
            'text' => 'labore'
        ];

        $news[] = [
            'id' => 16,
            'category' => 'animals',
            'text' => 'et'
        ];

        $news[] = [
            'id' => 17,
            'category' => 'international',
            'text' => 'dolore'
        ];

        $news[] = [
            'id' => 18,
            'category' => 'international',
            'text' => 'magna'
        ];

        $news[] = [
            'id' => 19,
            'category' => 'international',
            'text' => 'aliqua'
        ];

        $news[] = [
            'id' => 20,
            'category' => 'international',
            'text' => 'Ut'
        ];

        return $news;
    }
}
