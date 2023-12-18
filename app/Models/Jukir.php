<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jukir extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'nip',
    ];
    protected $table = 'jukirs';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
