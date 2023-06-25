<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileagenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profileagen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("First_Name");
            $table->string("Last_Name");
            $table->integer("NIK");
            $table->integer("Date_of_Birth");
            $table->integer("Phone_Number");
            $table->text('Address');

            $table->unsignedBigInteger('agen_id');
            $table->foreign('agen_id')->references('id')->on('agen');

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
        Schema::dropIfExists('profileagen');
    }
}
