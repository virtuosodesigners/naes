<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToCandidates extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::table('candidates',function($table){

            $table->text('city');
            $table->text('parishes');
            $table->text('country');
            $table->text('optionalposition');
            $table->text('candidatestatus');
            $table->text('company');
            $table->text('positonworked');
            $table->date('empdateFrom');
            $table->date('empdateTo');
            $table->text('company2');
            $table->text('positonworked2');
            $table->date('empdateFrom2');
            $table->date('empdateTo2');

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
        Schema::table('candidates',function($table){

            $table->drop('city');
            $table->drop('parishes');
            $table->drop('country');
            $table->drop('optionalposition');
            $table->drop('candidropstatus');
            $table->drop('company');
            $table->drop('positonworked');
            $table->drop('empdateFrom');
            $table->drop('empdateTo');
            $table->drop('company2');
            $table->drop('positonworked2');
            $table->drop('empdateFrom2');
            $table->drop('empdateTo2');

        });
	}

}
