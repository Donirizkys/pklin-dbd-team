<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Penempatan extends Model
{
    protected $table = 'penempatan';
    protected $guarded = ['id'];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    public function guru(){
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    public function mitra(){
        return $this->belongsTo(Mitra::class, 'id_mitra');
    }

    public function periode(){
        return $this->belongsTo(Periode::class, 'id_periode');
    }

    public function presensi(){
        return $this->hasMany(Presensi::class, 'id_penempatan');
    }

    public function kegiatan(){
        return $this->hasMany(Kegiatan::class, 'id_penempatan');
    }

    public function penilaian(){
        return $this->hasOne(Penilaian::class, 'id_penempatan');
    }
}
