<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Order;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        return Payment::get();
    }

    public function store(Request $request)
    {
        $payment = Payment::create([
            'order_id' => $request->order_id,
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'payment_status' => 'pending'
        ]);

        return response()->json($payment, 201);
    }
    public function show($id)
    {
        $payment = Payment::findOrFail($id);
        return response()->json($payment);
    }

    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);
        $validatedData = $request->validate([
            'amount' => 'numeric',
            'payment_method' => 'string',
            'payment_status' => 'string',
        ]);

        $payment->update($validatedData);
        return response()->json($payment);
    }

    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();
        return response()->json(null, 204);
    }
}
