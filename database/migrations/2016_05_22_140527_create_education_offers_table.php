<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('education_id');
            $table->unsignedInteger('cohort_id');
            $table->foreign('cohort_id')->references('id')->on('cohorts')->onDelete('cascade');
            $table->unsignedInteger('address_id');
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('education_offers');
    }
}
