<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penempatan extends Model
{
    protected $table = 'penempatan';
    public $timestamps = false;
    protected $guarded = [];

    public function siswa(): BelongsTo { return $this->belongsTo(Siswa::class); }
    public function dudi(): BelongsTo { return $this->belongsTo(Dudi::class); }
    public function pembimbing(): BelongsTo { return $this->belongsTo(Pembimbing::class); }
}
