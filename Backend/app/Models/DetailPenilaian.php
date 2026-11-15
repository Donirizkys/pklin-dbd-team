<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPenilaian extends Model
{
    protected $table = 'detail_penilaian';
    protected $guarded = ['id'];
    protected $casts = [
        'nilai' => 'float',
    ];

    public function penilaian(){
        return $this->belongsTo(Penilaian::class, 'id_penilaian');
    }

    public function aspek(){
        return $this->belongsTo(AspekPenilaian::class, 'id_aspek_penilaian');
    }
}
