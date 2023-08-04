<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => '2023-07-28 07:05:50',
            'password' => Hash::make('admin123'),
            'level' => '1',
        ]);
    }
}
