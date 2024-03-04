<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingPelayananLainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_pelayanan_lains', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique')->unique();
            $table->string('nama_pelayananlain');
            $table->string('hargalain');
            $table->string('keteranganlain');
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
        Schema::dropIfExists('setting_pelayanan_lains');
    }
}
