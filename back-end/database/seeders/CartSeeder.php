<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carts = [
            [
              "id"=> 1,
              "user_id"=> 13,
              "product_id"=> 1,
              "quantity"=> 1,
              "created_at"=> "2024-05-20T23:01:16.000000Z",
              "updated_at"=> "2024-05-20T23:01:16.000000Z"
            ],
            [
              "id"=> 2,
              "user_id"=> 16,
              "product_id"=> 2,
              "quantity"=> 1,
              "created_at"=> "2024-05-20T23:47:37.000000Z",
              "updated_at"=> "2024-05-20T23:47:37.000000Z"
            ],
            [
              "id"=> 3,
              "user_id"=> 16,
              "product_id"=> 1,
              "quantity"=> 1,
              "created_at"=> "2024-05-21T07:48:57.000000Z",
              "updated_at"=> "2024-05-21T07:48:57.000000Z"
            ],
            [
              "id"=> 4,
              "user_id"=> 17,
              "product_id"=> 2,
              "quantity"=> 1,
              "created_at"=> "2024-05-21T07:48:59.000000Z",
              "updated_at"=> "2024-05-21T07:48:59.000000Z"
            ]
          ];
        // Insert carts into the database
        foreach ( $carts as $cart ) {
            Cart::create( $cart );
        }
    }
}
