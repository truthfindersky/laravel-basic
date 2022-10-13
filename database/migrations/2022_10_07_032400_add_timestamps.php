<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestamps extends Migration
{
    
    public function up()
    {
        Schema::table('exam_marks', function(Blueprint $table){
        $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
