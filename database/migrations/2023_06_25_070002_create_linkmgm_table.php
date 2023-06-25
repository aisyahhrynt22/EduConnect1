<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkmgmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linkmgm', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("Link_Pendaftaran");

            $table->unsignedBigInteger('kodemgm_id');
            $table->foreign('kodemgm_id')->references('id')->on('kodemgm');

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
        Schema::dropIfExists('linkmgm');
    }
}
