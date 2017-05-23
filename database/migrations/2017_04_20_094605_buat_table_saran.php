<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableSaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saran', function (Blueprint $table){
            $table->increments('id');
            $table->integer('member_id',false,true);
            $table->foreign('member_id')->references('id')->on('member')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama');
            $table->string('saran');
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
        Schema::drop('saran');
    }
}
