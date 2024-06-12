<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        return Order::get();
    }

    public function store(Request $request)
    {
        $order = Order::create([
            'user_id' => $request->user_id,
            'total' => $request->total,
            'status' => 'pending'
        ]);

        foreach ($request->items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price']
            ]);
        }

        return response()->json($order, 201);
    }

    public function show($id)
    {
        $orders = Order::findOrFail($id);
        return response()->json($orders);
    }

    public function update(Request $request, $id)
    {
        $orders = Order::findOrFail($id);
        $validatedData = $request->validate([
            
        ]);

        $orders->update($validatedData);
        return response()->json($orders);
    }

    public function destroy($id)
    {
        $orders = Order::findOrFail($id);
        $orders->delete();
        return response()->json(null, 204);
    }
}
