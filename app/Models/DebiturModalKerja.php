<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DebiturModalKerja extends Model
{
    use SoftDeletes;

    protected $table = 'debitur_modal_kerja';

    protected $fillable = [
        'simulation_id',
        'permohonan_kredit',
        'tanggal',
        'nama_perusahaan',
        'bidang_usaha_perusahaan',
        'nib',
        'akte_pendirian',
        'alamat_lengkap',
        'no_npwp_perusahaan',
        'no_telp_perusahaan',
        'agunan',
        'no_agunan',
        'atas_nama_agunan',
        'nama_direktur',
        'no_ktp_sim',
        'tempat_lahir',
        'tanggal_lahir',
        'jumlah_tanggungan',
        'pekerjaan',
        'nama_perusahaan_direktur',
        'alamat_perusahaan_direktur',
        'lama_bekerja',
        'no_telepon_direktur',
        'nama_usaha',
        'alamat_usaha',
        'lama_usaha',
        'bentuk_badan_usaha',
        'bidang_usaha',
        'npwp_usaha',
        'no_telepon_usaha',
        'jumlah_permohonan_kredit',
        'jangka_waktu',
        'tujuan_penggunaan',
        'account_officer',
        'pemohon',
    ];

    protected $dates = ['deleted_at', 'tanggal', 'tanggal_lahir'];

    public function simulation()
    {
        return $this->belongsTo(Simulation::class);
    }
}
