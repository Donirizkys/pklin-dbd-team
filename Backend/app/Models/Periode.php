<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = 'periode';
    protected $guarded = ['id'];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
    ];

    public function penempatan(){
        return $this->hasMany(Penempatan::class, 'id_periode');
    }

    public function aspekPenilaian(){
        return $this->hasMany(AspekPenilaian::class, 'id_periode');
    }
}
