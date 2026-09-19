<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mi página</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <a href="/" class="logo">
            MiWeb
        </a>

        <div class="nav-left">
            <a href="/">Inicio</a>
            <a href="/celulares">Celulares</a>
        </div>

        <div class="nav-right">
            <a href="/nosotros">Nosotros</a>
            <a href="/login">Login</a>
             <div class="register"></div>
          <a href="/registro">Registrate</a>
        </div>
    </nav>


    <!-- CONTENIDO -->
    <main class="main">

        <section class="hero">

            <h1>Bienvenido a MiWeb</h1>

            <p>
                Una página simple, moderna y casual.
                Acá vas a poder encontrar información sobre celulares
                y mucho más.
            </p>

            <a href="/celulares" class="btn">
                Ver celulares
            </a>

        </section>


        <!-- TARJETAS -->
        <section class="cards">

            <div class="card">
                 <a href="/celulares">Celulares</a>

                <p>
                    Mira diferentes celulares y descubre
                    sus características.
                    
                </p>
            </div>


            <div class="card">
                <h2>👥 Nosotros</h2>

                <p>
                    Conoce un poco más sobre nuestra página
                    y lo que hacemos.
                </p>
            </div>


            <div class="card">
                <h2>🔐 Cuenta</h2>

                <p>
                    Inicia sesión para acceder a más
                    funciones de la página.
                </p>
            </div>


            

        </section>

    </main>


    <!-- FOOTER -->
    <footer class="footer">

        © 2026 MiWeb - Todos los derechos reservados.

    </footer>

</body>
</html>