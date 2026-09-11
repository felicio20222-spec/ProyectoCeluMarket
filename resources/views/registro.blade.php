
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrarse</title>

    <link rel="stylesheet" href="{{ asset('css/registro .css') }}">
</head>

<body>

    <div class="register-container">

        <h1>Crear cuenta</h1>
        <p>Registrate para comenzar</p>

        <form action="/register" method="POST">

            @csrf

            <div class="form-group">
                <label for="name">Nombre</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Ingresa tu nombre"
                    required
                >
            </div>

            <div class="form-group">
                <label for="lastname">Apellido</label>
                <input
                    type="text"
                    id="lastname"
                    name="lastname"
                    placeholder="Ingresa tu apellido"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="ejemplo@correo.com"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Ingresa una contraseña"
                    required
                >
            </div>

 

            <div class="form-group">
                <label for="password_confirmation">Confirmar contraseña</label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Repite tu contraseña"
                    required
                >
            </div>

            <button type="submit" class="register-button">
                Registrarse
            </button>

        </form>

        <div class="login-link">
            ¿Ya tenés una cuenta?
            <a href="/login">Iniciar sesión</a>
        </div>

    </div>

</body>
</html>

