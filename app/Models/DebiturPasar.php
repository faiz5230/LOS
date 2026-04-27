<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DebiturPasar extends Model
{
    use SoftDeletes;

    protected $table = 'debitur_pasar';

    protected $fillable = [
        'simulation_id',
        'permohonan_kredit',
        'tanggal',
        'nama',
        'hubungan',
        'bidang_usaha',
        'no_ijasah',
        //'akte_pendirian',
        'alamat_lengkap',
        //'nopen',
        'no_telepon_pemohon',
        'agunan',
        //'no_agunan',
        //'atas_nama_agunan',
        'nama_kontak_tidak_serumah',
        'no_ktp_sim',
        'tempat_lahir',
        'tanggal_lahir',
        'jumlah_tanggungan',
        'status_perkawinan',
        //'pekerjaan',
        //'nama_perusahaan_direktur',
        'alamat',
        //'lama_bekerja',
        'no_telepon_kontak_tidak_serumah',
        'status_rumah',
        'lama_menempati',
        'nama_usaha',
        'alamat_saudara',
        'alamat_usaha',
        'lama_usaha',
        //'bentuk_badan_usaha',
        'bidang_usaha',
        //'npwp_usaha',
        'no_telepon_usaha',
        'jumlah_permohonan_kredit',
        'jangka_waktu',
        'tujuan_penggunaan',
        'account_officer',
        'besaran_gaji',
        'angsuran',
    ];

    protected $dates = ['deleted_at', 'tanggal', 'tanggal_lahir'];

    public function simulation()
    {
        return $this->belongsTo(Simulation::class);
    }
    public function accountOfficer()
    {
        return $this->belongsTo(AccountOfficer::class, 'account_officer_id');

    }
}
