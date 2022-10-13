<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//21. Migration, create table

class Students extends Migration
{

    public function up()
    {
        Schema::create('students', function(Blueprint $table){
        $table->bigIncrements('id');
        $table->string('name' , 100);
        $table->string('roll', 100);
        $table->string('class', 100);
        $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
