<?php

namespace Database\Seeders;

//use class
use App\Models\Admin;
use Illuminate\Database\Seeder;

//use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
                "name" => "Abdullah Al Mamun",
                "username" => "mamun",
                "email" => "mamun@gmail.com",
                "password" => bcrypt("123456")
        ]);
    }
}
