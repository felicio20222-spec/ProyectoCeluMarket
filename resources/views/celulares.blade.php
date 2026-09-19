<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Celulares - CeluMarket</title>

    <link rel="stylesheet" href="{{ asset('css/celulares.css') }}">
</head>

<body>

    <main class="celulares-container">

        <h1>Nuestros celulares</h1>

        <p class="descripcion">
            Encontrá el celular que estás buscando.
        </p>

        <div class="productos-grid">

            @foreach ($productos as $producto)

                <div class="producto-card">

                    <div class="producto-imagen">
                        📱
                    </div>

                    <div class="producto-info">

                        <h2>{{ $producto->nombre }}</h2>

                        <p class="marca">
                            {{ $producto->marca }}
                        </p>

                        <p class="precio">
                            ${{ number_format($producto->precio, 0, ',', '.') }}
                        </p>

                        <p class="stock">
                            Stock: {{ $producto->stock }} unidades
                        </p>

                        <form action="{{ route('carrito.agregar', $producto->id) }}" method="POST">
                            @csrf

                            <button type="submit" class="btn-carrito">
                                Agregar al carrito
                            </button>
                        </form>                      
                    </div>

                </div>

            @endforeach

        </div>

    </main>

</body>

</html>