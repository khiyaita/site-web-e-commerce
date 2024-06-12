<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {
    /**
    * Run the database seeds.
    */

    public function run(): void {
        $categories = [
            [
                'id'=> 1,
                'name'=> 'smartphones',
                'created_at'=> '2024-05-20T20:55:40.000000Z',
                'updated_at'=> '2024-05-20T20:55:40.000000Z'
            ],
            [
                'id'=> 2,
                'name'=> 'laptops',
                'created_at'=> '2024-05-20T20:55:40.000000Z',
                'updated_at'=> '2024-05-20T20:55:40.000000Z'
            ],
            [
                'id'=> 3,
                'name'=> 'perfume',
                'created_at'=> '2024-05-20T20:55:40.000000Z',
                'updated_at'=> '2024-05-20T20:55:40.000000Z'
            ],
            [
                'id'=> 4,
                'name'=> 'haircare',
                'created_at'=> '2024-05-20T20:55:40.000000Z',
                'updated_at'=> '2024-05-20T20:55:40.000000Z'
            ],
            [
                'id'=> 5,
                'name'=> 'jewellery',
                'created_at'=> '2024-05-20T20:55:40.000000Z',
                'updated_at'=> '2024-05-20T20:55:40.000000Z'
            ],
            [
                'id'=> 6,
                'name'=> 'accessories',
                'created_at'=> '2024-05-20T20:55:40.000000Z',
                'updated_at'=> '2024-05-20T20:55:40.000000Z'
            ],
            [
                'id'=> 7,
                'name'=> 'groceries',
                'created_at'=> '2024-05-20T20:55:40.000000Z',
                'updated_at'=> '2024-05-20T20:55:40.000000Z'
            ],
            [
                'id'=> 8,
                'name'=> 'home-decoration',
                'created_at'=> '2024-05-20T20:55:40.000000Z',
                'updated_at'=> '2024-05-20T20:55:40.000000Z'
            ],
            [
                'id'=> 9,
                'name'=> "men's clothing",
                'created_at'=> '2024-05-20T20:55:40.000000Z',
                'updated_at'=> '2024-05-20T20:55:40.000000Z'
            ],
            [
                'id'=> 10,
                'name'=> 'jewelery',
                'created_at'=> '2024-05-20T20:55:40.000000Z',
                'updated_at'=> '2024-05-20T20:55:40.000000Z'
            ],
            [
                'id'=> 11,
                'name'=> 'electronics',
                'created_at'=> '2024-05-20T20:55:40.000000Z',
                'updated_at'=> '2024-05-20T20:55:40.000000Z'
            ],
            [
                'id'=> 12,
                'name'=> "women's clothing",
                'created_at'=> '2024-05-20T20:55:40.000000Z',
                'updated_at'=> '2024-05-20T20:55:40.000000Z'
            ]
        ];
        // Insert categories into the database
        foreach ( $categories as $categorie ) {
            Category::create( $categorie );
        }

    }
}
