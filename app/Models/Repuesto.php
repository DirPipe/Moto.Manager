<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repuesto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cantidad',
        'precio',
    ];

    public function inventario()
    {
        return $this->hasMany(InventarioRepuesto::class);
    }
}
