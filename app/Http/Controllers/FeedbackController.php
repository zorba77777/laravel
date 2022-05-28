<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedbacks.index', [
            'feedbacks' => Feedback::all()
        ]);
    }

    public function show(Feedback $feedback)
    {
        return view('feedbacks.show', [
            'feedback' => $feedback
        ]);
    }

    public function create()
    {
        return view('feedbacks.create');
    }

    public function edit(int $feedbackId)
    {
        $feedback = Feedback::find($feedbackId);
        return view('feedbacks.edit', [
            'feedback' => $feedback
        ]);
    }

    public function update(Request $request, Feedback $feedback)
    {
        $paramsToInsert = $request->except(['_token', 'submit', 'q']);
        $feedback->fill($paramsToInsert);
        $feedback->save();
        return redirect()->route('feedbacks.index');
    }

    public function store(Request $request)
    {
        $paramsToInsert = $request->except(['_token']);
        Feedback::create($paramsToInsert);
        return redirect()->route('feedbacks.index');
    }

    public function delete(Feedback $feedback)
    {
        $feedback->forceDelete();
        return redirect()->route('feedbacks.index');
    }

}
