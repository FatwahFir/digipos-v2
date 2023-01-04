<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puskesmas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'puskesmas';

    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function adminpuskesmas()
    // {
    //     return $this->belongsTo(AdminPuskesmas::class);
    // }

//     public function posyandu(){
//         return $this->hasMany(Posyandu::class);
//     }
}
