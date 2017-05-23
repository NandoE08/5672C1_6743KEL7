<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePenginapan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penginapan', function (Blueprint $table){
            $table->increments('id');
            $table->string('nama_penginapan');
            $table->text('alamat');
            $table->string('fasilitas');
            $table->integer('tarif');
            $table->string('file');
            $table->integer('jenis_penginapan_id',false,true);
            $table->foreign('jenis_penginapan_id')->references('id')->on('jenis_penginapan')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('penginapan');
    }
}
