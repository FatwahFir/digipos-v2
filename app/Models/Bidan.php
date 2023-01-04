<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'bidan';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
