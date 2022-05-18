<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function index()
    {
        return view('order');
    }

    public function store(Request $request)
    {
        Storage::disk('local')->append('orders.txt', $request->input('firstname', 'anon'));
        Storage::disk('local')->append('orders.txt', $request->input('phonenumber', 'empty'));
        Storage::disk('local')->append('orders.txt', $request->input('email', 'empty'));
        Storage::disk('local')->append('orders.txt', $request->input('requestedinfo', 'empty'));
        return redirect()->route('order');
    }
}
