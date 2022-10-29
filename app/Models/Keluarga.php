<?php

namespace App\Models;

use App\Models\Desa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keluarga extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function desa(){
        return $this->belongsTo(Desa::class, 'id_desa');
    }
}
