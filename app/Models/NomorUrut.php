<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class NomorUrut extends Model
{
    protected $table = 'nomor_urut';

    public $timestamps = false;
    protected $fillable = [
        'nomor',
        'kode',
        'bulan',
        'tahun',
        'jenis_dokumen',
        'id_debitur',
        'nomor_full'
    ];

   
}
