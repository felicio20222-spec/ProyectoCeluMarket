<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

   
</head>

<body class="min-h-screen flex items-center justify-center bg-gray-900">

    <div class="w-full max-w-md px-6">

        <div class="bg-white rounded-2xl shadow-xl p-8">

            <h1 class="text-3xl font-bold text-center text-gray-800 mb-2">
                Iniciar sesión
            </h1>

            <p class="text-center text-gray-500 mb-8">
                Ingresá a tu cuenta
            </p>

            <form method="POST" action="{{ route('login.process') }}">
    @csrf

    <div class="mb-5">
        <label
            for="email"
            class="block text-sm font-medium text-gray-700 mb-2">
            Correo electrónico
        </label>

        <input
            type="email"
            id="email"
            name="email"
            placeholder="ejemplo@correo.com"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-6">
        <label
            for="password"
            class="block text-sm font-medium text-gray-700 mb-2">
            Contraseña
        </label>

        <input
            type="password"
            id="password"
            name="password"
            placeholder="••••••••"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

                 <button
                     type="submit"
                     class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Iniciar sesión
             </button>

            </form>

            <form method="POST" action="{{ route('login.process') }}">
    @csrf

            <div class="text-center mt-6">

                <p class="text-gray-500">
                    ¿No tenés una cuenta?
                </p>

                <a
                    href="#"
                    class="text-blue-600 font-semibold hover:underline">
                    Crear una cuenta
                </a>

            </div>

        </div>

    </div>
 <nav class="navbar">

        <div class="nav-left">
          <nav class="navbar">

    <div class="nav-left">
        <a href="/">Index</a>
        <a href="#">Celulares</a>
    </div>

    <div class="nav-right">
        <a href="#">Nosotros</a>
        <a href="/login">Login</a>
    </div>

</nav>
        </div>

    </nav>
</body>

</html>