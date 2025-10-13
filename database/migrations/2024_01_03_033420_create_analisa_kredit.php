<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('analisa_kredit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_debitur');
            $table->text('keterangan')->nullable();
            $table->decimal('gaji_pokok', 20, 2);
            $table->decimal('tunjangan_jabatan', 20, 2);
            $table->decimal('lembur', 20, 2);
            $table->decimal('tunjangan_lain', 20, 2);
            $table->decimal('gaji_pasangan', 20, 2);
            $table->decimal('pendapatan_lain', 20, 2);
            $table->decimal('total_pendapatan', 20, 2);
            $table->decimal('angsuran_bank', 20, 2);
            $table->decimal('kewajiban_pihak_ketiga', 20, 2);
            $table->decimal('angsuran_bpr', 20, 2);
            $table->decimal('total_kewajiban', 20, 2);
            $table->decimal('disposible_income', 20, 2);
            $table->decimal('disposible_income_percent', 5, 2);
            $table->decimal('repayment_capacity', 5, 2);
            $table->string('hasil');
            $table->timestamps();

            $table->foreign('id_debitur')->references('id')->on('master_debiturs');
        });
    }

    public function down()
    {
        Schema::dropIfExists('analisa_kredit');
    }
};
