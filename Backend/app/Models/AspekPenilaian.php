<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AspekPenilaian extends Model
{
    protected $table = 'aspek_penilaian';
    protected $guarded = ['id'];
    protected $casts = [
        'bobot' => 'float',
    ];
}
