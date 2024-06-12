<?php

namespace Database\Seeders;

use App\Models\Wishlist;
use Illuminate\Database\Seeder;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wishlists = [
            [
              "id"=> 1,
              "user_id"=> 13,
              "product_id"=> 10,
              "created_at"=> "2024-06-08T11:46:42.000000Z",
              "updated_at"=> "2024-06-08T11:46:42.000000Z"
            ],
            [
              "id"=> 2,
              "user_id"=> 16,
              "product_id"=> 20,
              "created_at"=> "2024-06-08T11:46:42.000000Z",
              "updated_at"=> "2024-06-08T11:46:42.000000Z"
            ],
            [
              "id"=> 3,
              "user_id"=> 17,
              "product_id"=> 20,
              "created_at"=> "2024-06-08T11:46:42.000000Z",
              "updated_at"=> "2024-06-08T11:46:42.000000Z"
            ],
            [
              "id"=> 4,
              "user_id"=> 17,
              "product_id"=> 10,
              "created_at"=> "2024-06-08T11:46:42.000000Z",
              "updated_at"=> "2024-06-08T11:46:42.000000Z"
            ]
          ];
        // Insert wishlists into the database
        foreach ( $wishlists as $wishlist ) {
            Wishlist::create( $wishlist );
        }
    }
}
