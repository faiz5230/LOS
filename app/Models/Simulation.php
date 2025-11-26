<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Simulation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'tanggal_realisasi',
        'nama',
        'jenis_kredit',
        'tanggal_lahir',
        'usia',
        'besaran_gaji',
        'dsr',
        'maksimal_angsuran',
        'plafond',
        'jangka_waktu',
        'bunga_flat',
        'bunga_effektif',
        'angsuran',
        'sisa_gaji',
        'biaya_provisi',
        'biaya_notaris',
        'biaya_administrasi',
        'biaya_asuransi',
        'biaya_materai',
        'retensi',
        'tabungan_wajib',
        'rate_asuransi',
        'ass_krd',
        'bunga',
        'denda',
        'pinalty',
        'total_diterima',
        'jatuh_tempo',
    ];

    protected $dates = ['deleted_at'];


    public function debiturModalKerja()
    {
        return $this->hasOne(DebiturModalKerja::class);
    }

    // Your model code here
    // Your model code here
}
