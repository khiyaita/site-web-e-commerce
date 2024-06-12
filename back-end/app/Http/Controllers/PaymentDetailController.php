<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentDetail;

class PaymentDetailController extends Controller
{
    public function index()
    {
        return PaymentDetail::get();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'card_number' => 'required|string',
            'card_holder_name' => 'required|string',
            'expiration_date' => 'required|date',
            'cvv' => 'required|string'
        ]);

        $paymentDetail = PaymentDetail::create($validatedData);
        return response()->json($paymentDetail, 201);
    }

    public function show($id)
    {
        $paymentDetail = PaymentDetail::findOrFail($id);
        return response()->json($paymentDetail);
    }

    public function update(Request $request, $id)
    {
        $paymentDetail = PaymentDetail::findOrFail($id);
        $validatedData = $request->validate([
            'card_number' => 'string',
            'card_holder_name' => 'string',
            'expiration_date' => 'date',
            'cvv' => 'string'
        ]);

        $paymentDetail->update($validatedData);
        return response()->json($paymentDetail);
    }

    public function destroy($id)
    {
        $paymentDetail = PaymentDetail::findOrFail($id);
        $paymentDetail->delete();
        return response()->json(null, 204);
    }
}
