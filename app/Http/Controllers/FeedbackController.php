<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback');
    }

    public function store(Request $request)
    {
        Storage::disk('local')->append('feedback.txt', $request->input('firstname', 'anon'));
        Storage::disk('local')->append('feedback.txt', $request->input('comment', 'empty'));
        return redirect()->route('feedback');
    }

}
