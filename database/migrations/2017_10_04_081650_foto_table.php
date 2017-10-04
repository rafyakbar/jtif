<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto', function (Blueprint  $table){
            $table->bigIncrements('id');
            $table->integer('galeri_id')->unsigned();
            $table->foreign('galeri_id')
                ->references('id')
                ->on('galeri')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->text('dir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
