<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders.index', [
            'orders' => Order::all()
        ]);
    }

    public function show(Order $order)
    {
        return view('orders.show', [
            'order' => $order
        ]);
    }

    public function create()
    {
        return view('orders.create');
    }

    public function edit(int $orderId)
    {
        $order = Order::find($orderId);
        return view('orders.edit', [
            'order' => $order
        ]);
    }

    public function update(Request $request, Order $order)
    {
        $paramsToInsert = $request->except(['_token', 'submit', 'q']);
        $order->fill($paramsToInsert);
        $order->save();
        return redirect()->route('orders.index');
    }

    public function store(Request $request)
    {
        $paramsToInsert = $request->except(['_token']);
        Order::create($paramsToInsert);
        return redirect()->route('orders.index');
    }

    public function delete(Order $order)
    {
        $order->forceDelete();
        return redirect()->route('orders.index');
    }
}
