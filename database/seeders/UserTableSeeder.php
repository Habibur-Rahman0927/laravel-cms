<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'habibur.rahman.0927@gmail.com')->first();

        if (!$user) {
            User::create([
                'role' => 'admin',
                'name' => 'Admin',
                'email' => 'habibur.rahman.0927@gmail.com',
                'password' => Hash::make('asdf1234'),
            ]);
        }
    }
}
