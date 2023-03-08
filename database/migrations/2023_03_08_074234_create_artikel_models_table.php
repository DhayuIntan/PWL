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
        Schema::create('artikel_models', function (Blueprint $table) {
            $table->id('id_artikel');
            $table->enum('tema_artikel', ['pendidikan', 'kebudayaan', 'politik']);
            $table->string('judul_artikel', 100);
            $table->string('penulis_artikel', 100);
            $table->date('tanggal_publikasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel_models');
    }

};
