<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use SoftDeletes;

    protected $table = 'mitra';
    protected $guarded = ['id'];

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function penempatan(){
        return $this->hasMany(Penempatan::class, 'id_mitra');
    }

    public function aturan(){
        return $this->hasMany(Aturan::class, 'id_mitra');
    }

    public function hariLibur(){
        return $this->hasMany(HariLibur::class, 'id_mitra');
    }
}
