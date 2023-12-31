<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $password = md5('Ari2023!');
        User::create([
            'name' => 'Ali',
            'email' => 'career@fikretcure.dev',
            'password' => $password
        ])->accounts()->create([
            'balance' => rand(1, 10000)
        ]);

        User::create([
            'name' => 'Onur',
            'email' => 'fikretcure@gmail.com',
            'password' => $password
        ])->accounts()->create([
            'balance' => rand(1, 10000)
        ]);
    }
}
