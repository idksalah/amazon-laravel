<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index($userId)
    {
        return response()->json(PaymentMethod::where('user_id', $userId)->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'type' => 'required|in:credit_card,paypal,bank_transfer',
            'details' => 'required|json'
        ]);

        $paymentMethod = PaymentMethod::create($validated);
        return response()->json($paymentMethod, 201);
    }

    public function destroy($id)
    {
        PaymentMethod::destroy($id);
        return response()->json(['message' => 'Método de pago eliminado']);
    }
}
