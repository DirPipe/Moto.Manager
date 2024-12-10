<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'moto_id',
        'descripcion',
        'fecha',
        'costo',
    ];

    public function moto()
    {
        return $this->belongsTo(Moto::class);
    }
}
