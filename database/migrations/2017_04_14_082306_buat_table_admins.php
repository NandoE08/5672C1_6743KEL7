<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableAdmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table){
            $table->increments('id');
            $table->string('nama');
            $table->text('alamat');
            $table->string('pekerjaan');
            $table->integer('pengguna_id',false,true);
            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('admins');
    }
}
