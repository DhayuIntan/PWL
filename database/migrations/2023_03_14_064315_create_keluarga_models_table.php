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
        Schema::create('keluarga_models', function (Blueprint $table) {
            $table->id('id_keluarga');
            $table->string('nama_wali', 100);
            $table->string('alamat_wali', 200);
            $table->string('nik_wali', 20);
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'hindu', 'buddha', 'konghucu']);
            $table->string('pendidikan_wali', 50);
            $table->string('pekerjaan_wali', 100);
            $table->string('hubungan', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keluarga_models');
    }
};
