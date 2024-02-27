<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Klien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klien', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique')->unique();
            $table->string('nama');
            $table->string('no_hp');
            $table->string('password');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('pendidikan_terakhir');
            $table->string('pekerjaan');
            $table->string('status');
            $table->string('agama');
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
        Schema::dropIfExists('klien');
    }
}
