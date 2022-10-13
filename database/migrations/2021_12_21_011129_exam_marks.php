<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExamMarks extends Migration
{

    //21. Migration, create table
    public function up()
    {
        Schema::create('exam_marks', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name' , 100);
            $table->string('marks', 100);
            $table->string('roll', 100);
            });
    }

    public function down()
    {
        //
    }
}
