<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table){
            $table->string('id')->primary()->unique();
            $table->integer('prodi_id')->unsigned()->nullable();
            $table->foreign('prodi_id')->references('id')->on('prodi')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('jenis_kelamin');
            $table->text('dir')->nullable();
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
        //
    }
}
