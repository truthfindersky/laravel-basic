<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


//25. database seeder - insert dummy data

class CreateUsersTable extends Migration
{
    
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();                             
            $table->string('name');                   
            $table->string('email')->unique();        
            //$table->timestamp('email_verified_at')->nullable();   // Only applicable if you need email verification
            $table->string('password');               
            //$table->rememberToken();                  // Each user has a remember token (to allow him or her to stay signed in
            $table->timestamps();                     
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
