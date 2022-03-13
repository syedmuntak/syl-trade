<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                'name' => 'Syed Ejaj',
                'email' => 'ejaj.lus.1999@gmail.com',
                'username' => 'syedejaj',
                'user_role' => 'Admin',
                'password' => Hash::make('ejaj1234'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

       User::insert($admin);
    }
}
