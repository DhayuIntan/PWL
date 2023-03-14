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
        Schema::create('dosen_models', function (Blueprint $table) {
            $table->id('id_dosen');
            $table->string('nidn', 10);
            $table->string('nama_dosen', 100);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('kota_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('prodi_dosen', 100);
            $table->string('pendidikan_dosen', 10);
            $table->enum('status_dosen', ['dosen tetap', 'dosen honorer']);
            $table->string('alamat', 200);
            $table->string('no_telp', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen_models');
    }
};
