<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('1234aA!64'),
        ]);
        $user->assignRole('Admin');

        $user= User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('1234aA!64'),
        ]);
        $user->assignRole('User');
    }
}
