<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterDebitursTable extends Migration
{
    public function up()
    {
        Schema::create('master_debiturs', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('no_ktp_sim');
            $table->date('masa_berlaku');
            $table->text('alamat_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pendidikan_terakhir');
            $table->string('status_rumah');
            $table->string('lama_menempati');
            $table->string('status_perkawinan');
            $table->string('nama_ibu_kandung');
            $table->string('pekerjaan');
            $table->string('nama_ayah_kandung');
            $table->string('no_telepon_pemohon');
            $table->string('agunan');
            $table->string('no_ijasah');
            $table->string('nama_istri_suami');
            $table->integer('jumlah_tanggungan');
            $table->string('nama_perusahaan');
            $table->text('alamat_perusahaan');
            $table->string('lama_bekerja');
            $table->string('no_telepon');
            $table->string('nama_kontak_tidak_serumah');
            $table->string('hubungan');
            $table->text('alamat');
            $table->string('no_id_pegawai');
            $table->string('bidang_usaha');
            $table->string('jabatan');
            $table->integer('jumlah_permohonan_kredit');
            $table->integer('jangka_waktu');
            $table->string('tujuan_penggunaan');
            $table->string('account_officer');
            $table->decimal('besaran_gaji', 10, 2);
            $table->decimal('dsr', 10, 2);
            $table->decimal('angsuran', 10, 2);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('master_debiturs');
    }
}