<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//use these classes
use App\Models\Users;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

//25. database seeder - insert dummy data

class UsersSeeder extends Seeder
{

    public function run()
    {
        Users::insert([
            //'name' => Str::random(10),
            //'email' => Str::random(10).'@gmail.com',
            //'password' => Hash::make('password'),
            //'password' => bcrypt("123456"),
            'name' => 'John Doe',
            'email' => 'doejohn@gmail.com',
            'password' => '1234',
        ]);
    }
}
