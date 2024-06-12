<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Category::all();
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

        return Category::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Category::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Category = Category::findOrFail($id);

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

        $Category->update($request->all());

        return $Category;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Category = Category::findOrFail($id);
        $Category->delete();

        return response()->json(['message' => 'Category deleted successfully']);
    }
}
