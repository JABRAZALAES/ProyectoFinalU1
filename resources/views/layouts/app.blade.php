<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
        }

        nav {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
        }


        .navbar-nav .nav-item {
            margin-right: 15px;
        }

        .navbar-nav .nav-link {
            text-decoration: none;
            color: #4CAF50;
            font-weight: 600;
            padding: 8px 16px;
            border: 1px solid green;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            background-color: #4CAF50;
            color: #ffffff;
        }
        footer {
            background-color: #4CAF50; 
            color: white;
            text-align: center;
            padding: 6em;
        }

    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('', '') }}
                    Tiendita-ESPE
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        <div class="nav-item">
                            <a class="nav-link btn"  href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                        </div>

                        <div class="nav-item">
                            <a class="nav-link btn"  href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </div>
                        @else
                        <li class="nav-item">
                                    <a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('productos.index') }}">Productos Vendidos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('ventas.index') }}">Registro de Ventas</a>
                                </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer>
        <p>Tiendita - ESPE - © {{ date('Y') }} Minimarket</p>
    </footer>
</body>
</html>
