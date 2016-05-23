<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshiptoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('internshiptools', function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('internship_id');
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('tool_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('internship_id')->references('id')->on('internships');
            $table->foreign('tool_id')->references('id')->on('tools');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('internshiptools');
    }
}
