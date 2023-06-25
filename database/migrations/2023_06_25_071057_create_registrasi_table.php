<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('calonmhs_id');
            $table->foreign('calonmhs_id')->references('id')->on('calonmhs');

            $table->unsignedBigInteger('linkmgm_id');
            $table->foreign('linkmgm_id')->references('id')->on('linkmgm');

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
        Schema::dropIfExists('registrasi');
    }
}
