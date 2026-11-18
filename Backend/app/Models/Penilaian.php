<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Penilaian extends Model
{
    protected $table = 'penilaian';
    protected $guarded = ['id'];
    protected $casts = [
        'nilai_akhir' => 'float',
    ];

    public function penilaian(){
        return $this->belongsTo(Penempatan::class, 'id_penempatan');
    }

    public function detail(){
        return $this->hasMany(DetailPenilaian::class, 'id_penilaian');
    }
}
