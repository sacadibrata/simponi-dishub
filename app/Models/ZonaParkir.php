<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZonaParkir extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'zona_parkir'];
    protected $table = 'zona_parkirs';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
