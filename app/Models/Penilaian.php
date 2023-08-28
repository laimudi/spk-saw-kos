<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $fillable = [
        'alternatif_id',
        'crips_id'
    ];

    public function datakos()
    {
        return $this->belongsTo(Datakos::class, 'datakos_id', 'id');
    }

    public function crips()
    {
        return $this->belongsTo(Crips::class, 'crips_id', 'id');
    }
}
