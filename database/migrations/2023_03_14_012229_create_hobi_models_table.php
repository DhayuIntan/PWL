<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobi_models', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('nama_siswa', 100);
            $table->string('alamat', 100);
            $table->string('hobi', 100);
            $table->string('prestasi', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hobi_models');
    }
};
