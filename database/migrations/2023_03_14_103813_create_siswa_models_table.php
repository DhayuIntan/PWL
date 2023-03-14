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
        Schema::create('siswa_models', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('nim_siswa', 10);
            $table->string('nama_siswa', 100);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('kota_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('agama', 50);
            $table->string('gol_darah', 5);
            $table->string('no_telp', 50);
            $table->string('email', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa_models');
    }
};
