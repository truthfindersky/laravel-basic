<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class TableChange extends Migration
{

    //21. Migration, modify table and column
    public function up()
    {
        Schema::table('all_table', function(Blueprint $table){
        $table->string('city', 50)->change();
        });
    }

    public function down()
    {
        //
    }
}
