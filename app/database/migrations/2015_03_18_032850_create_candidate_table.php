<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('candidates',function($newtable){
            $newtable->increments('id');
            $newtable->text('name');
            $newtable->text('address');
            $newtable->text('tel');
            $newtable->text('email');
            $newtable->text('candidate_type');
            $newtable->text('passport');
            $newtable->date('passportexpiry');
            $newtable->text('tel1');
            $newtable->date('orientationdate');
            $newtable->date('interviewdate');
            $newtable->date('medicaldate');
            $newtable->text('cbc');
            $newtable->date('embassydate');
            $newtable->date('traveldate');
            $newtable->text('candidatephoto');
            $newtable->text('employer');
            $newtable->text('position2');
            $newtable->date('passissuedate');
            $newtable->text('emergency');
            $newtable->text('emergencyaddress');
            $newtable->boolean('contract');
            $newtable->boolean('passpictures');
            $newtable->boolean('passport1');
            $newtable->boolean('recommendations');
            $newtable->boolean('regfee');
            $newtable->boolean('visa');
            $newtable->text('paymenttype');
            $newtable->timestamps();

        });
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('candidates');
		//
	}

}
