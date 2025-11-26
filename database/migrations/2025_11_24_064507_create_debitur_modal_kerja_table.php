<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('debitur_modal_kerja', function (Blueprint $table) {
            $table->id();
            
            // Permohonan Kredit
            $table->string('permohonan_kredit')->nullable();
            $table->date('tanggal')->nullable();
            
            // Data Perusahaan
            $table->string('nama_perusahaan')->nullable();
            $table->string('bidang_usaha_perusahaan')->nullable();
            $table->string('nib')->nullable();
            $table->string('akte_pendirian')->nullable();
            $table->text('alamat_lengkap')->nullable();
            $table->string('no_npwp_perusahaan')->nullable();
            $table->string('no_telp_perusahaan')->nullable();
            
            // Data Agunan
            $table->string('data_agunan')->nullable();
            $table->string('agunan')->nullable();
            $table->string('no_agunan')->nullable();
            $table->string('atas_nama_agunan')->nullable();
            
            // Data Direktur
            $table->string('nama_direktur')->nullable();
            $table->string('no_ktp_sim')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('jumlah_tanggungan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('nama_perusahaan_direktur')->nullable();
            $table->text('alamat_perusahaan_direktur')->nullable();
            $table->string('lama_bekerja')->nullable();
            $table->string('no_telepon_direktur')->nullable();
            
            // Data Usaha Calon Debitur
            $table->string('nama_usaha')->nullable();
            $table->text('alamat_usaha')->nullable();
            $table->string('lama_usaha')->nullable();
            $table->string('bentuk_badan_usaha')->nullable();
            $table->string('bidang_usaha')->nullable();
            $table->string('npwp_usaha')->nullable();
            $table->string('no_telepon_usaha')->nullable();
            
            // Permohonan Kredit Details
            $table->decimal('jumlah_permohonan_kredit', 22, 2)->nullable();
            $table->integer('jangka_waktu')->nullable();
            $table->string('tujuan_penggunaan')->nullable();
            $table->string('account_officer')->nullable();
            $table->string('pemohon')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('debitur_modal_kerja');
    }
};
