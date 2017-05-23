<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableWisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisata', function (Blueprint $table){
            $table->increments('id');
            $table->string('nama');
            $table->text('alamat');
            $table->string('fasilitas');
            $table->integer('tarif');
            $table->string('file');
            $table->integer('penginapan_id',false,true);
            $table->foreign('penginapan_id')->references('id')->on('penginapan')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('transportasi_id',false,true);
            $table->foreign('transportasi_id')->references('id')->on('transportasi')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('wisata');
    }
}
