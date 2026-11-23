<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Siswa extends Model
{
    protected $table = 'siswa';
    public $timestamps = false;
    protected $guarded = [];

    public function penempatan(): HasOne { return $this->hasOne(Penempatan::class, 'siswa_id'); }
}
