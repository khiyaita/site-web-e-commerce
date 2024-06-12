<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => 13,
                'name' => 'Ajdi Ilyas',
                'email' => 'ilyas@example.com',
                'address' => null,
                'email_verified_at' => null,
                'created_at' => '2024-05-21 12:04:02',
                 'password' => Hash::make('ilyas@123'),
                'updated_at' => '2024-05-21 12:04:02'
            ],
            [
                'id' => 16,
                'name' => 'khiyaita mohcine',
                'email' => 'mohcine@example.com',
                'address' => null,
                'email_verified_at' => null,
                'created_at' => '2024-06-04 10:26:58',
                 'password' => Hash::make('mohcine@123'),
                'updated_at' => '2024-06-04 10:26:58'
            ],
            [
                'id' => 17,
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'address' => null,
                'email_verified_at' => null,
                'created_at' => '2024-06-04 10:35:30',
                 'password' => Hash::make('john@123'),
                'updated_at' => '2024-06-04 10:35:30'
            ]
        ];

        // Insert users into the database
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
