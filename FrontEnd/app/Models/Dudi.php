<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dudi extends Model
{
    protected $table = 'dudi';
    public $timestamps = false;
    protected $guarded = [];

    public function penempatan(): HasMany { return $this->hasMany(Penempatan::class, 'dudi_id'); }
}
