<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $users = [
            [
                "name" => "alexis",
                "email" => "jlagoueguy@gmail.com",
                "password" => Hash::make('1234568')
            ],
            [
                "name" => "max",
                "email" => "max@gmail.com",
                "password" => Hash::make('1234568')
            ],
            [
                "name" => "louis",
                "email" => "louis@gmail.com",
                "password" => Hash::make('1234568')
            ]
        ];

        User::insert($users);
    }
}
