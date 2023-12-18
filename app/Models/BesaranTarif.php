<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BesaranTarif extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'zonaparkir_id', 'kendaraan_id', 'jenistarif_id', 'besaran_tarif'];
    protected $table = 'besaran_tarifs';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function jenistarif()
    {
        return $this->belongsTo(JenisTarif::class);
    }
    public function zonaparkir()
    {
        return $this->belongsTo(ZonaParkir::class);
    }
}

