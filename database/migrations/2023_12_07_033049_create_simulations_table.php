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
        Schema::create('simulations', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_realisasi');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->integer('usia');
            $table->decimal('besaran_gaji', 22, 2);
            $table->decimal('dsr', 22, 2);
            $table->decimal('maksimal_angsuran', 22, 2);
            $table->decimal('plafond', 22, 2);
            $table->integer('jangka_waktu');
            $table->decimal('bunga_flat', 22, 2);
            $table->decimal('bunga_effektif', 22, 2);
            $table->decimal('angsuran', 22, 2);
            $table->decimal('sisa_gaji', 22, 2);
            $table->decimal('biaya_provisi', 22, 2);
            $table->decimal('biaya_administrasi', 22, 2);
            $table->decimal('biaya_asuransi', 22, 2);
            $table->decimal('biaya_materai', 22, 2);
            $table->decimal('retensi', 22, 2);
            $table->decimal('tabungan_wajib', 22, 2);
            $table->decimal('rate_asuransi', 22, 2);
            $table->decimal('ass_krd', 22, 2);
            $table->decimal('bunga', 22, 2);
            $table->decimal('denda', 22, 2);
            $table->decimal('pinalty', 22, 2);
            $table->decimal('total_diterima', 22, 2);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('simulations');
    }
};
