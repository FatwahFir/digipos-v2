<?php

namespace App\Models;

use App\Models\Pasien;
use App\Models\StatusGizi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gizi extends Model
{
    use HasFactory;

    protected $table = 'gizi';
    protected $guarded = [];

    public function statusGizi(){
        return $this->belongsTo(StatusGizi::class, 'id_status_gizi');
    }

    public function pasien(){
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }
}
