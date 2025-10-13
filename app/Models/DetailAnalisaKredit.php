<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailAnalisaKredit extends Model
{
    protected $table = 'detail_analisa_kredit';

    protected $fillable = [
        'id_analisa_kredit',
        'atas_nama',
        'bank',
        'plafond_awal',
        'bunga',
        'outstanding',
        'jangka_waktu',
        'angsuran',
        'kolektibilitas',
    ];

    public function analisaKredit()
    {
        return $this->belongsTo(AnalisaKredit::class, 'id_analisa_kredit');
    }
}