<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToCandidates extends Migration {

    public function up()
    {
        //
        Schema::table("candidates",function($table){

            $table->text('posted_by');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table("candidates",function($table){

            $table->drop('posted_by');


        });
    }



}
