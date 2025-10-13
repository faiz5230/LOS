<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Insurance extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama_debitur',
        'tanggal_lahir',
        'jenis_kelamin',
        'mulai_asuransi',
        'jangka_waktu',
        'plafon_kredit',
        'premi',
        'usia',
        'akhir_asuransi',
        'rate',
    ];

    protected $dates = ['deleted_at'];

    // Your model code here
}
