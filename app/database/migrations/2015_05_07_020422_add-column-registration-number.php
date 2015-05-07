<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnRegistrationNumber extends Migration {

    public function up()
    {
        //
        Schema::table("candidates",function($table){

            $table->text('registration_number');


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

            $table->drop('registration_number');


        });
    }
}
