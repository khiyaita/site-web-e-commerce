<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
    * Seed the application's database.
    */

    public function run(): void {
        // \App\Models\UserSeeder::factory( 10 )->create();

        // Uncomment the following line to call the ProductSeeder
        $this->call( [
            UsersTableSeeder::class,
            ProductSeeder::class,
            CategorySeeder::class,
            WishlistSeeder::class,
            CartSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
            PaymentSeeder::class,
            PaymentDetailSeeder::class,
        ] );
    }
}
