
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

    <div class="login-container">

        <div class="login-box">

            <h1>Iniciar sesión</h1>

            <p class="subtitle">
                Ingresá a tu cuenta
            </p>

            <form method="POST" action="{{ route('login.process') }}">

                @csrf

                <div class="form-group">

                    <label for="email">
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="ejemplo@correo.com">

                </div>

                <div class="form-group">

                    <label for="password">
                        Contraseña
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Contraseña">

                </div>

                <button type="submit">
                    Iniciar sesión
                </button>

            </form>

            <div class="register">

                <p>¿No tenés una cuenta?</p>

                <a href="/registro">
                    Crear una cuenta
                </a>

            </div>

        </div>

    </div>

</body>

</html>
```