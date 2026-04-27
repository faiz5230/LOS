<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterDebitur extends Model
{
    use SoftDeletes;

    protected $table = 'master_debiturs';
    protected $fillable = [
        'tanggal',
        'nama',
        'jenis_kelamin',
        'no_ktp_sim',
        'masa_berlaku',
        'alamat_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'pendidikan_terakhir',
        'status_rumah',
        'lama_menempati',
        'status_perkawinan',
        'nama_ibu_kandung',
        'pekerjaan_ibu_kandung',
        'nama_ayah_kandung',
        'pekerjaan_ayah_kandung',
        'no_telepon_pemohon',
        'agunan',
        'no_ijasah',
        'nama_pasangan',
        'no_ktp_sim_pasangan',
        'tempat_lahir_pasangan',
        'tanggal_lahir_pasangan',
        'jumlah_tanggungan',
        'pekerjaan_pasangan',
        'nama_perusahaan_pasangan',
        'alamat_perusahaan_pasangan',
        'lama_bekerja_pasangan',
        'no_telepon_pasangan',
        'nama_usaha',
        'alamat_perusahaan',
        'lama_bekerja',
        'no_telepon',
        'nama_kontak_tidak_serumah',
        'hubungan',
        'alamat_saudara',
        'no_telepon_kontak_tidak_serumah',
        'no_id_pegawai',
        'bidang_usaha',
        'jabatan',
        'jumlah_permohonan_kredit',
        'jangka_waktu',
        'tujuan_penggunaan',
        'account_officer',
        'besaran_gaji',
        'dsr',
        'angsuran',
        'id_simulation'
    ];

    protected $dates = ['deleted_at'];

    public function simulation()
    {
        return $this->belongsTo(Simulation::class, 'id_simulation', 'id');
    }

    public function analisaKredit()
    {
        return $this->hasMany(AnalisaKredit::class, 'id_debitur', 'id');
    }

    public function latestAnalisaKredit()
    {
        return $this->hasOne(AnalisaKredit::class, 'id_debitur', 'id')->latestOfMany();
    }
}
