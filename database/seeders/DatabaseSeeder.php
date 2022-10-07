<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Super User',
            'email' => 'superuser@sipelku.com',
            'email_verified_at' => now(),
            'password' => Hash::make('1234567890'),
            'remember_token' => Str::random(10),
        ]);

        // \App\Models\User::factory(5)->create();
    }
}
