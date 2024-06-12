<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'discountPercentage' => 'required|numeric',
            'rating' => 'required|numeric',
            'stock' => 'required|integer',
            'brand' => 'required',
            'category' => 'required',
            'thumbnail' => 'required|url',
            'images' => 'required|array',
        ]);

        return Product::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Product::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'discountPercentage' => 'required|numeric',
            'rating' => 'required|numeric',
            'stock' => 'required|integer',
            'brand' => 'required',
            'category' => 'required',
            'thumbnail' => 'required|url',
            'images' => 'required|array',
        ]);

        $product->update($request->all());

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Product deleted successfully']);
    }
}
