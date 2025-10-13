<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnalisaKredit extends Model
{
    protected $table = 'analisa_kredit';

    protected $fillable = [
        'id_debitur',
        'tanggal_slik',
        'keterangan',
        'gaji_pokok',
        'tunjangan_jabatan',
        'lembur',
        'tunjangan_lain',
        'gaji_pasangan',
        'pendapatan_lain',
        'total_pendapatan_lain',
        'total_pendapatan_perbulan',
        'total_pendapatan',
        'angsuran_bank',
        'kewajiban_pihak_ketiga',
        'angsuran_bpr',
        'total_kewajiban',
        'disposible_income',
        'disposible_income_percent',
        'rp_kewajiban',
        'rp_pendapatan',
        'rumus_rc',
        'hasil',
        'catatan'
    ];

    public function debitur()
    {
        return $this->belongsTo(MasterDebitur::class, 'id_debitur');
    }

    public function detailAnalisaKredit()
    {
        return $this->hasMany(DetailAnalisaKredit::class, 'id_analisa_kredit');
    }
}