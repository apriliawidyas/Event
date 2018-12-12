<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('penyelenggara');
            $table->string('nama_event');
            $table->date('tgl_event');
            $table->time('waktu_event');
            $table->string('tempat_event');
            $table->integer('harga');
            $table->string('foto');
            $table->integer('kuota');
            $table->string('deskripsi');
            $table->integer('category_id')->unsigned();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
