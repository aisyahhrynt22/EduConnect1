<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKodemgmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kodemgm', function (Blueprint $table) {
            $table->bigIncrements('id');

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
        Schema::dropIfExists('kodemgm');
    }
}
