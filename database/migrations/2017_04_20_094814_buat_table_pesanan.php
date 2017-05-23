<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table){
            $table->increments('id');
            $table->integer('member_id',false,true);
            $table->foreign('member_id')->references('id')->on('member')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('wisata_id',false,true);
            $table->foreign('wisata_id')->references('id')->on('wisata')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama');
            $table->integer('no_tlp');
            $table->integer('rekening');
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
        Schema::drop('pesanan');
    }
}
