<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('notes',function($newtable) {
            $newtable->increments('id');
            $newtable->text('note');
            $newtable->date('note_date');
            $newtable->integer('candidate_id')->unsigned()->index();
            $newtable->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade');
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
        Schema::drop('notes');
	}

}
