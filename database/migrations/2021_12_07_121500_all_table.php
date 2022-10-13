<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllTable extends Migration
{

    //21. Migration, create table
    public function up()
    {
        Schema::create('all_table', function(Blueprint $table){
        $table->bigIncrements('id');
        $table->bigInteger('votes');
        $table->binary('img');
        $table->boolean('confirmed');
        $table->string('name', 50);
        $table->dateTimeTz('created_at');
        $table->ipAddress('visitor');
        $table->longText('description');
        $table->string('city', 100);
        });
    }

    public function down()
    {
        //
    }
}
