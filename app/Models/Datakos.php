<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datakos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kos',
        'alamat',
        'jarak',
        'jenis',
        'harga',
        // 'latitude',
        // 'longitude',
        'gambar'
    ];

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, 'datakos_id', 'id');
    }

    protected $table = 'datakos';
}
