<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name'=>'Muhammad Rafique',
            'user_name'=>'webdeventh',
            'email'=>'webdeventh@gmail.com',
            'user_role'=>'admin',
            'password'=>bcrypt('12345678')
        ];

        User::create($user);
    }
}
