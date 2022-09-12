<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        </head>

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<body>
    <div class="topnav" id="myTopnav">
        <a href="{{url('/')}}" class="active">Tablero</a>
        <a href="#news">Mis Posts</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <a class="auth_content" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesion</a>

        <a class="auth_content" href="{{ route('user.show', Auth::user()->id) }}">{{ Auth::user()->name }}</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>


    <main class="py-4">
        @yield('content')
    </main>

</body>
<script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>

</html>
