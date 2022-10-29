<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function desa(){
        return $this->belongsTO(Desa::class, 'id_desa');
    }
}
