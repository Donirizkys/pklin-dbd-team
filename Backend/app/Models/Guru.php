<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use SoftDeletes;

    protected $table = 'guru';
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function penempatan(){
        return $this->hasMany(Penempatan::class, 'id_guru');
    }
}
