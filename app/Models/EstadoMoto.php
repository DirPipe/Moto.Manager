<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoMoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'moto_id',
        'mecanico_id',
        'estado',
    ];

    public function moto()
    {
        return $this->belongsTo(Moto::class);
    }

    public function mecanico()
    {
        return $this->belongsTo(User::class);
    }
}

