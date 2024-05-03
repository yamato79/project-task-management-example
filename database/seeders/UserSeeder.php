<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'email' => 'admin@admin.com',
                'name' => 'Default Account',
            ],
        ])->each(function ($userData) {
            User::firstOrCreate([
                'email' => $userData['email'],
            ], array_merge($userData, [
                'password' => bcrypt('password'),
            ]));
        });
    }
}
