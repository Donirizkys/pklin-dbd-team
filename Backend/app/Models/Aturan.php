<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{
    protected $table = 'aturan';
    protected $guarded = ['id'];

    public function mitra() {
        return $this->belongsTo(Mitra::class, 'id_mitra');
    }
}
