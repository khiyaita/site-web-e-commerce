<?php

namespace Database\Seeders;

use App\Models\PaymentDetail;
use Illuminate\Database\Seeder;

class PaymentDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentDetails = [
            [
              "id"=> 1,
              "user_id"=> 17,
              "card_number"=> "encrypted_card_number_value",
              "card_holder_name"=> "John Doe",
              "expiration_date"=> "2025-12-31",
              "cvv"=> "encrypted_cvv_value",
              "created_at"=> "2024-06-08T12:11:43.000000Z",
              "updated_at"=> "2024-06-08T12:11:43.000000Z"
            ],
            [
              "id"=> 2,
              "user_id"=> 13,
              "card_number"=> "encrypted_card_number_value",
              "card_holder_name"=> "Mohsine Khiyaita",
              "expiration_date"=> "2025-12-31",
              "cvv"=> "encrypted_cvv_value",
              "created_at"=> "2024-06-08T12:11:43.000000Z",
              "updated_at"=> "2024-06-08T12:11:43.000000Z"
            ],
            [
              "id"=> 3,
              "user_id"=> 16,
              "card_number"=> "encrypted_card_number_value",
              "card_holder_name"=> "Mohcine Khiyaita",
              "expiration_date"=> "2025-12-31",
              "cvv"=> "encrypted_cvv_value",
              "created_at"=> "2024-06-08T12:11:43.000000Z",
              "updated_at"=> "2024-06-08T12:11:43.000000Z"
            ]
          ];
        // Insert categories into the database
        foreach ( $paymentDetails as $paymentDetail ) {
            PaymentDetail::create( $paymentDetail );
        }
    }
}
