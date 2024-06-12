<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders =[
            [
              "id"=> 1,
              "user_id"=> 13,
              "total"=> "100.50",
              "status"=> "completed",
              "created_at"=> "2024-06-08T11:48:32.000000Z",
              "updated_at"=> "2024-06-08T11:48:32.000000Z"
            ],
            [
              "id"=> 2,
              "user_id"=> 16,
              "total"=> "200.75",
              "status"=> "pending",
              "created_at"=> "2024-06-08T11:48:32.000000Z",
              "updated_at"=> "2024-06-08T11:48:32.000000Z"
            ],
            [
              "id"=> 3,
              "user_id"=> 17,
              "total"=> "50.00",
              "status"=> "shipped",
              "created_at"=> "2024-06-08T11:48:32.000000Z",
              "updated_at"=> "2024-06-08T11:48:32.000000Z"
            ],
            [
              "id"=> 4,
              "user_id"=> 17,
              "total"=> "150.00",
              "status"=> "completed",
              "created_at"=> "2024-06-08T11:48:32.000000Z",
              "updated_at"=> "2024-06-08T11:48:32.000000Z"
            ]
          ];
        // Insert orders into the database
        foreach ( $orders as $order ) {
            Order::create( $order );
        }
    }
}
