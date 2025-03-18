<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index($userId)
    {
        return response()->json(Order::where('user_id', $userId)->with('products')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'total' => 'required|numeric',
            'status' => 'required|in:pending,completed,cancelled',
            'payment_method' => 'nullable|exists:payment_methods,id'
        ]);

        $order = Order::create($validated);
        return response()->json($order, 201);
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update(['status' => $request->status]);

        return response()->json($order);
    }
}
