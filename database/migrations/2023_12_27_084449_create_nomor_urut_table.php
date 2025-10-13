<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('nomor_urut', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor');
            $table->string('kode');
            $table->string('jenis_dokumen');
            $table->string('bulan');
            $table->year('tahun');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nomor_urut');
    }
};
