<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrasaranaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prasarana', function (Blueprint $table){
            $table->increments('id');
            $table->string('nama')->unique();
            $table->text('keterangan');
            $table->text('dir')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voidSword Art Online Movie Ordinal Scale
     */
    public function down()
    {
        //
    }
}
