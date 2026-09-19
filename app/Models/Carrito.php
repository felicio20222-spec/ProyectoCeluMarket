<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Producto;

class Carrito extends Model
{
    protected $table = 'carrito';

    protected $fillable = [

    
        'user_id',
        'producto_id',
        'cantidad',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
