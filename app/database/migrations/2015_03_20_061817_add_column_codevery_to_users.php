<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCodeveryToUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

    public function up()
    {
        //
        Schema::create('users',function($newtable){
            $newtable->increments('id');
            $newtable->string('email')->unique();
            $newtable->string('username',100)->unique();
            $newtable->string('password',100);
            $newtable->string('user_type');
            $newtable->text('codverify');
            $newtable->rememberToken();
            $newtable->timestamps();


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
        Schema::drop('users');
    }


}
