<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarioRepuesto extends Model
{
    use HasFactory;

    protected $fillable = [
        'repuesto_id',
        'cantidad_disponible',
    ];

    public function repuesto()
    {
        return $this->belongsTo(Repuesto::class);
    }
}
