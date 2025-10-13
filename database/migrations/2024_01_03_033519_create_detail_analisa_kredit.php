<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('detail_analisa_kredit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_analisa_kredit');
            $table->string('atas_nama');
            $table->string('bank');
            $table->decimal('plafond_awal', 20, 2);
            $table->decimal('bunga', 5, 2);
            $table->decimal('outstanding', 20, 2);
            $table->integer('jangka_waktu');
            $table->decimal('angsuran', 20, 2);
            $table->string('kolektibilitas');
            $table->timestamps();

            $table->foreign('id_analisa_kredit')->references('id')->on('analisa_kredit');
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_analisa_kredit');
    }
};
