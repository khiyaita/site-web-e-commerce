<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payments = [
            [
              "id"=> 1,
              "order_id"=> 2,
              "amount"=> "75.50",
              "payment_method"=> "paypal",
              "payment_status"=> "completed",
              "created_at"=> "2024-06-08T11:58:02.000000Z",
              "updated_at"=> "2024-06-08T11:58:02.000000Z"
            ],
            [
              "id"=> 2,
              "order_id"=> 3,
              "amount"=> "150.00",
              "payment_method"=> "credit_card",
              "payment_status"=> "pending",
              "created_at"=> "2024-06-08T11:58:02.000000Z",
              "updated_at"=> "2024-06-08T11:58:02.000000Z"
            ],
            [
              "id"=> 3,
              "order_id"=> 4,
              "amount"=> "200.00",
              "payment_method"=> "bank_transfer",
              "payment_status"=> "failed",
              "created_at"=> "2024-06-08T11:58:02.000000Z",
              "updated_at"=> "2024-06-08T11:58:02.000000Z"
            ],
            [
              "id"=> 4,
              "order_id"=> 4,
              "amount"=> "200.00",
              "payment_method"=> "bank_transfer",
              "payment_status"=> "failed",
              "created_at"=> "2024-06-08T11:58:02.000000Z",
              "updated_at"=> "2024-06-08T11:58:02.000000Z"
            ]
          ];
        // Insert payments into the database
        foreach ( $payments as $patment ) {
            Payment::create( $patment );
        }
    }
}
