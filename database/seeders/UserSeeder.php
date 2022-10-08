<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234567890')
        ]);

        $admin->assignRole('Administrator');

        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@user.com',
            'password' => bcrypt('1234567890')
        ]);

        $user->assignRole('User');
    }
}
