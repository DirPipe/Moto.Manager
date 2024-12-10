<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'marca',
        'modelo',
        'numero_placa',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reparaciones()
    {
        return $this->hasMany(Reparacion::class);
    }

    public function estado()
    {
        return $this->hasOne(EstadoMoto::class);
    }
}
