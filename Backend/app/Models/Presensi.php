<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    protected $table = 'presensi';
    protected $guarded = ['id'];

    protected $casts = [
        'tanggal' => 'date',
        'latitude_masuk' => 'float',
        'longitude_masuk' => 'float',
        'latitude_pulang' => 'float',
        'longitude_pulang' => 'float',
        'jarak_masuk_meter' => 'float',
        'jarak_pulang_meter' => 'float',
    ];

    public function penempatan(){
        return $this->belongsTo(Penempatan::class, 'id_penempatan');
    }
}
