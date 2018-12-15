<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 50);
            $table->string('role')->default('user');
            $table->string('email')->unique();
            $table->string('password', 30);
            $table->string('notelp', 12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
