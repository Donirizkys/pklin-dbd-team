<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $guarded = ['id'];

    protected $casts = [
        'tanggal' => 'date',
    ];

    public function penempatan(){
        return $this->belongsTo(Penempatan::class, 'id_penempatan');
    }
}
