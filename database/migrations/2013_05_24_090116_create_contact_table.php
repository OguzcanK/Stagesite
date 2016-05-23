<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surename', 50);
            $table->string('insertion')->nullable();
            $table->string('firstname', 60);
            $table->string('email');
            $table->integer('phonenumber')->nullable();
            $table->unsignedInteger('company_id')->nullable();
           
            $table->timestamps(); 
            
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');;
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
    }
}
