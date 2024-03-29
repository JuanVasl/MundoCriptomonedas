<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Booptstrap se agrega manualmente-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--SweetAlert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    @yield('js')

    <!--Para iconoz-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://use.fontawesome.com/releases/vVERSION/js/all.js" data-mutate-approach="sync"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>


            #container-form{
                margin-top: 15px;
                width: 70%;
                text-align: center;
                margin-left: auto;
                margin-right: auto;
            }
            #header-form {
                font-family: 'Nunito';
                font-size: 22px;
                margin-bottom: 5px;
                margin-top: 5px;
            }
        </style>
</head>
<body style="background-color: #e8f9fd "> <!--color de fondo-->
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" >
                    API
                </a>
                <form>
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item ">
                            <a class="nav-link" href="/read/Vista" style="color: #2155cd;">
                            <i class=" fa-2x fas fa-users"></i>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="/listar" style="color: #E74C3C;">
                            <i class=" fa-2x fab fa-bitcoin"></i>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="/" style="color: #E74C3C;">
                            <i class=" fa-2x fa fa-file-text" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/reglas" style="color: #2155CD;">
                            <i class=" fa-2x fas ms-0 fa-file-word"></i>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="https://juanvas.kanbantool.com/b/834287#?" style="color: #F7DC6F;">
                                <i class="fa-2x  fas fa-chalkboard-teacher"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="https://github.com/JuanVasl/MundoCriptomonedas.git" >
                                <i class="fa-2x fab fa-github-square"></i>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="https://drive.google.com/drive/folders/1MzMzyldro_eiYM_p_6FpEvv_5k89o3hr?usp=sharing" style="color: #E74C3C;">
                                <i class="fa-2x fab fa-youtube"></i>
                            </a>
                        </li>

                    </ul>
                </form>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">      <!--Abrir session-->
                                    <a class="nav-link" href="{{ route('login') }}">Acceder</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">       <!--En la navbar para acceder al registro-->
                                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-circle"> {{ Auth::user()->name }}</i> <!--nombre del usuario-->
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-user-times"> Cerrar Sesion</i><!--cerrar sesion-->
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
    <script src="{{asset('js/app.js')}}"></script>
 @yield('js')<!--Ayuda con mostrar el mensaje de error-->
</body>
</html>
