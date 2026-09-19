<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
   public function agregar(Request $request, $producto_id)
{
    $producto = Producto::findOrFail($producto_id);

    if ($producto->stock <= 0) {
        return back()->with('error', 'Este producto no tiene stock.');
    }

    $carrito = Carrito::where('user_id', auth()->id())
                      ->where('producto_id', $producto_id)
                      ->first();

    if ($carrito) {

        if ($carrito->cantidad >= $producto->stock) {
            return back()->with('error', 'No hay más unidades disponibles de este producto.');
        }

        $carrito->cantidad++;
        $carrito->save();

    } else {

        Carrito::create([
            'user_id' => auth()->id(),
            'producto_id' => $producto_id,
            'cantidad' => 1,
        ]);
    }

    return back()->with('success', 'Producto agregado al carrito.');
}

    public function disminuir($id)
    {
        $item = Carrito::where('id', $id)
                       ->where('user_id', auth()->id())
                       ->firstOrFail();

        if ($item->cantidad > 1) {
            $item->cantidad--;
            $item->save();
        }

        return back();
    }


    public function eliminar($id)
{
    $item = Carrito::where('id', $id)
                       ->where('user_id', auth()->id())
                       ->firstOrFail();

    $item->delete();

    return back();
}
}