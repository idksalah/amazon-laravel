<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index($userId)
    {
        return response()->json(Cart::where('user_id', $userId)->with('product')->get());
    }

    public function addToCart(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $cart = Cart::updateOrCreate(
            ['user_id' => $validated['user_id'], 'product_id' => $validated['product_id']],
            ['quantity' => $validated['quantity']]
        );

        return response()->json($cart);
    }

    public function removeFromCart($id)
    {
        Cart::destroy($id);
        return response()->json(['message' => 'Producto eliminado del carrito']);
    }
}
