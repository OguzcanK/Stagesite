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
            $table->unsignedInteger('internship_user_id');
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('tool_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('internship_user_id')->references('id')->on('internship_users')->onDelete('cascade');
            $table->foreign('tool_id')->references('id')->on('tools');

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
        Schema::drop('internshiptools');
    }
}
