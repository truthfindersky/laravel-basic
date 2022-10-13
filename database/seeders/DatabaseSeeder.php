<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    //25. database seeder - insert dummy data
    
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            //AdminSeeder::class
        ]);
    }
}
