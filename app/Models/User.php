<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'id',
        'nik',
        'name',
        'jenisKelamin',
        'username',
        'email',
        'password',
        'jabatan',
        'notelp',
        'tempatlhr',
        'tgllahir',
        'role_id',
        'alamat',
        'foto',
    ];
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function jukir()
    {
        return $this->hasMany(Jukir::class);
    }
}
