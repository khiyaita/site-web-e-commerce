<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderItems = [
            [
              "id"=> 5,
              "order_id"=> 1,
              "product_id"=> 11,
              "quantity"=> 2,
              "price"=> "19.99",
              "created_at"=> "2024-06-08T11:51:43.000000Z",
              "updated_at"=> "2024-06-08T11:51:43.000000Z"
            ],
            [
              "id"=> 6,
              "order_id"=> 2,
              "product_id"=> 12,
              "quantity"=> 1,
              "price"=> "29.99",
              "created_at"=> "2024-06-08T11:51:43.000000Z",
              "updated_at"=> "2024-06-08T11:51:43.000000Z"
            ],
            [
              "id"=> 7,
              "order_id"=> 3,
              "product_id"=> 13,
              "quantity"=> 4,
              "price"=> "9.99",
              "created_at"=> "2024-06-08T11:51:43.000000Z",
              "updated_at"=> "2024-06-08T11:51:43.000000Z"
            ],
            [
              "id"=> 8,
              "order_id"=> 1,
              "product_id"=> 14,
              "quantity"=> 3,
              "price"=> "15.50",
              "created_at"=> "2024-06-08T11:51:43.000000Z",
              "updated_at"=> "2024-06-08T11:51:43.000000Z"
            ]
          ];
        // Insert orderItems into the database
        foreach ( $orderItems as $orederItem ) {
            OrderItem::create( $orederItem );
        }
    }
}
