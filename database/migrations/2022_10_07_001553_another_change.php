<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnotherChange extends Migration
{

    public function up()
    {
        Schema::table('all_table', function(Blueprint $table){
        $table->dropColumn('visitor');
        });

        Schema::table('students', function(Blueprint $table){
        $table->renameColumn('class', 'group');
        });
    }


    public function down()
    {
        //
    }
}
