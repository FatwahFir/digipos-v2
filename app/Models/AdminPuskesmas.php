<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPuskesmas extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    protected $table = 'admin_puskesmas';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function puskesmas()
    {
        return $this->belongsTo(Puskesmas::class, "puskesmas_id","id");
    }
}
