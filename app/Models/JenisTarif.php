<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisTarif extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'jenis_tarif'];
    protected $table = 'jenis_tarifs';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}
