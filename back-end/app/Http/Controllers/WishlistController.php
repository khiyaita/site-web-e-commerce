<?php

namespace App\Http\Controllers;

use App\Models\Wishlist; // Import your Wishlist model
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Wishlist::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        return Wishlist::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Wishlist::findOrFail($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();

        return response()->json(['message' => 'Item removed from wishlist successfully']);
    }
}
