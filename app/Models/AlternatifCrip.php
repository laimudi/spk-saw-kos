<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternatifCrip extends Model
{
    use HasFactory;

    protected $fillable = [
        'crips_id',
        'datakos_id'
    ];
}
