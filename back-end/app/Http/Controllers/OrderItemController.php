<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the order items.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderItems = OrderItem::all();
        return response()->json($orderItems);
    }

    /**
     * Store a newly created order item in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0'
        ]);

        $orderItem = OrderItem::create($request->all());

        return response()->json($orderItem, 201);
    }
    public function show($id)
    {
        $orderItem = OrderItem::findOrFail($id);
        return response()->json($orderItem);
    }

    /**
     * Update the specified order item in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0'
        ]);

        $orderItem = OrderItem::findOrFail($id);
        $orderItem->update($request->all());

        return response()->json($orderItem, 200);
    }

    /**
     * Remove the specified order item from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orderItem = OrderItem::findOrFail($id);
        $orderItem->delete();

        return response()->json(null, 204);
    }
}
