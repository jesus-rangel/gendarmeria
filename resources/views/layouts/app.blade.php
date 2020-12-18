<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- FontAwesome CDN --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{asset('css/login.css')}} ">
    {{-- Bootstrap CDN --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cerulean/bootstrap.min.css">
    @yield('custom-css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top shadow-sm">
            <div class="container">
                @include('flash::message')
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Gestión y Control de Beneficios Sociales
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> --}}
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            {{-- data-target="#dropdownMenu" --}}>
                                {{ Auth::user()->name }}
                            </a>
                            <div id="dropdownShow" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="dropdownMenu">
                                <a href="{{url('/home')}}" class="dropdown-item">
                                    <i class="fas fa-home"></i>&emsp;Home
                                </a>
                                @if(auth()->user()->hasRole('super-admin') || 
                                auth()->user()->hasRole('admin'))
                                <a href="{{route('users.index')}}" class="dropdown-item">
                                    <i class="fas fa-users-cog"></i>&emsp;{{__('Usuarios')}}
                                </a>
                                @endif
                                <a href="{{route('clientes.index')}}" class="dropdown-item">
                                    <i class="fas fa-users"></i>&emsp;{{__('Afiliados')}}
                                </a>
                                @if (auth()->user()->hasRole('super-admin'))
                                <a href="{{route('farmacias.index')}}" class="dropdown-item">
                                    <i class="fas fa-clinic-medical"></i>&emsp;{{__('Farmacias')}}
                                </a>
                                @endif
                                <a href="{{route('vademecum.index')}}" class="dropdown-item">
                                    <span style="margin-left: 2.5px">
                                        <i class="fas fa-book-medical"></i>
                                    </span>
                                    &emsp;{{__('Vademecum')}}
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{route('users.change-password-form', auth()->user())}}" class="dropdown-item">
                                    {{__('Cambiar contraseña')}}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                    
                    <client-search>
                    </client-search>
                    @endguest
                </div>
            </div>
        </nav>
        <main class="mt-4">
            @yield('content')
        </main>
    </div>
    {{-- Bootstrap scripts --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}
    <script>

        navbarDropdown = document.getElementById('navbarDropdown');
        dropdownShow = document.getElementById('dropdownShow');

        $('#navbarDropdown').on('show.bs.dropdown', (e) => {
            console.log(e);
        })
        /* function dropdownFunction()
        {
            console.log('funciona')
            dropdownShow.classList.toggle('show');
        } */
        
        /* $('#navbarDropdown').dropdown() */

        /* $('#flash-overlay-modal').modal(); */
     </script>
     @yield('custom-js')
</body>
</html>
