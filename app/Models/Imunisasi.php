<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    use HasFactory;

    protected $table = 'imunisasi';
    protected $guarded = ['id'];
    public function pasien(){
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }
    public function jenis_imunisasi(){
        return $this->belongsTo(JenisImunisasi::class, 'id_jenis');
    }
}
