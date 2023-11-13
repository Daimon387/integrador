<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
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
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            @if ($e == 'Administrador')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users.index') }}">usuarios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cargos.index') }}">Cargos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('asistenciadiarias.index') }}">AsistenciaDiarias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('personas.index') }}">Personas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('clientes.index') }}">clientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('empleados.index') }}">empleados</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('sucursals.index') }}">Sucursales</a>
                                </li>
                            @endif
                            @if ($e == "Vendedor")
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cintas.index') }}">Cintas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('telas.index') }}">Telas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('telacolores.index') }}">Tela colores</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('preferencias.index') }}">Preferencias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('transferenciainventarios.index') }}">transferenciaInventarios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('transacciones.index') }}">transacciones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pedidos.index') }}">Pedidos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pagos.index') }}">Pagos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('flujoefectivodiarios.index') }}">flujoEfectivo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('preciotelasucursals.index') }}">precioTelaSucursales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('detalletransaccions.index') }}">detalletransaccions</a>
                                </li>
                            @endif
                            @if ($e == 'Bodeguero')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('inventarios.index') }}">inventarios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('metodopagos.index') }}">MetodosPago</a>
                                </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ $e }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
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
</body>

</html>
