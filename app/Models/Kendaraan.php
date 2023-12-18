<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'jenis_kendaraan'];
    protected $table = 'kendaraans';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function jenistarif()
    {
        return $this->hasMany(JenisTarif::class);
    }
}
