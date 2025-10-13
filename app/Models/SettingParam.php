<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class SettingParam extends Model
{
    protected $table = 'setting_params';

    public $timestamps = false;
    protected $fillable = [
        'name',
        'value',
      
    ];

   
}
