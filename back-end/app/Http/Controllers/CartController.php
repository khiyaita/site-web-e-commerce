<?php

namespace App\Http\Controllers;

use App\Models\Cart; // Import your Cart model
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cart::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cart = new Cart();
        $cart->user_id = $request->user_id;
        $cart->product_id = $request->product_id;
        $cart->quantity = $request->quantity;
        $cart->save();

        return response()->json($cart, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Cart::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);

        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart->update(['quantity' => $request->quantity]);

        return response()->json($cart);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return response()->json(['message' => 'Item removed from cart successfully']);
    }

    /**
     * Clear the cart for a specific user.
     */
    public function clear($user_id)
    {
        Cart::where('user_id', $user_id)->delete();

        return response()->json(['message' => 'Cart cleared successfully']);
    }
}
