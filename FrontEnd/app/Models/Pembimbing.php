<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pembimbing extends Model
{
    protected $table = 'pembimbing';
    public $timestamps = false;
    protected $guarded = [];

    public function user(): BelongsTo { return $this->belongsTo(User::class); }
    public function penempatan(): HasMany { return $this->hasMany(Penempatan::class, 'pembimbing_id'); }
}
