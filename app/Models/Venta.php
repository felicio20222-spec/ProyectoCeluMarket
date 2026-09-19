<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DetalleVenta;

class Venta extends Model
{
    protected $fillable = [
        'user_id',
        'total',
        'direccion',
        'ciudad',
    ];

    public function detalles()
    {
        return $this->hasMany(DetalleVenta::class);
    }
}