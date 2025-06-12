<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['id' => 1, 'name' => 'testing', 'email' => 'test@example.com', 'password' => Hash::make('password')],
            // tambahin user lainnya disini
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
