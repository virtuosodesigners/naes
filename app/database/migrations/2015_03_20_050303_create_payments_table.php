<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('payments',function($newtable) {
            $newtable->increments('id');
            $newtable->float('amount');
            $newtable->text('payment_type');
            $newtable->date('payment_date');
            $newtable->integer('candidate_id')->unsigned()->index();
            $newtable->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade');
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
      //
        Schema::drop('payments');
   }

}


