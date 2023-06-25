<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilecalonmhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilecalonmhs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("Nama_Lengkap");
            $table->integer("No_Telp_Calon_Mhs");
            $table->integer("No_Telp_Orang_Tua");

            $table->unsignedBigInteger('calonmhs_id');
            $table->foreign('calonmhs_id')->references('id')->on('calonmhs');

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
        Schema::dropIfExists('profilecalonmhs');
    }
}
