<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    // protected $table = 'users';

    protected $fillable = [
        'name','username','password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function admin()
    {
        return $this->hasOne(Admin::class ,"user_id","id");
    }   

    public function AdminPuskesmas()
    {
        return $this->hasOne(AdminPuskesmas::class,"user_id","id");
    }

    public function kader()
    {
        return $this->hasOne(Kader::class ,"user_id","id");
    }

    public function puskesmas()
    {
        return $this->hasOne(Puskesmas::class,"user_id","id");
    }

    public function bidan()
    {
        return $this->hasOne(Bidan::class ,"user_id","id");
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    // public function role(){
    //     return $this->belongsTo(Role::class);
    //     // return 
    // }
}
