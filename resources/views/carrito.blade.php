<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Carrito - CeluMarket</title>
</head>

<body>

    <h1>🛒 Mi carrito</h1>

    @if ($carrito->isEmpty())

        <p>Tu carrito está vacío.</p>

    @else

        @php
            $total = 0;
        @endphp

        @foreach ($carrito as $item)

            @php
                $subtotal = $item->producto->precio * $item->cantidad;
                $total += $subtotal;
            @endphp

            <div>
                <h2>{{ $item->producto->nombre }}</h2>

                <p>
                    Marca: {{ $item->producto->marca }}
                </p>

                <p>
                    Precio: ${{ number_format($item->producto->precio, 0, ',', '.') }}
                </p>

               <div>
    <form action="{{ route('carrito.disminuir', $item->id) }}" method="POST" style="display: inline;">
        @csrf

        <button type="submit">−</button>
    </form>

    <span>
        {{ $item->cantidad }}
    </span>

    <form action="{{ route('carrito.aumentar', $item->id) }}" method="POST" style="display: inline;">
        @csrf

        <button type="submit">+</button>
    </form>
</div>

<form action="{{ route('carrito.eliminar', $item->id) }}" method="POST">
    @csrf

    <button type="submit">
        🗑️ Eliminar
    </button>
</form>

                <p>
                    Subtotal:
                    ${{ number_format($subtotal, 0, ',', '.') }}
                </p>

                <hr>
            </div>

        @endforeach

        <h2>
            Total:
            ${{ number_format($total, 0, ',', '.') }}
        </h2>

    @endif

</body>

</html>